<?php
	/* prepara o documento para comunicação com o JSON, as duas linhas a seguir são obrigatórias 
	  para que o PHP saiba que irá se comunicar com o JSON, elas sempre devem estar no ínicio da página */
	header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
	
	clearstatcache(); // limpa o cache
        // Dados do servidor de banco de Dados, neste exemplo uso Hostinger.
	$servidor = 'localhost:3306';
	$usuario  = 'root';
	$senha    = '';
	$banco    = 'cpf_db';

	try {
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		$conecta->exec("set names utf8"); //permite caracteres latinos.
		$consulta = $conecta->prepare('SELECT * FROM cpf');
		$consulta->execute(array());  
		$resultadoDaConsulta = $consulta->fetchAll();
		
		
		$StringJson = "";
		
	if ( count($resultadoDaConsulta) ) {
		foreach($resultadoDaConsulta as $registro) {
			
		#	if ($StringJson != "[") {$StringJson .= ",";}
			$StringJson .= '{"id":"' . $registro['id']  . '",';
			$StringJson .= '"cpf":"' . $registro['cpf']  . '",';	
			$StringJson .= '"score":"' . $registro['score']    . '"}';	
		}  
		echo $StringJson . ""; // Exibe o vettor JSON
  } 
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage(); // opcional, apenas para teste
}
?>
