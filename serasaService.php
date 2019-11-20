<html>

<head>
    <title>Api</title>
</head>

<body>
    <?php
    $json_file = file_get_contents("https://disponibilizar.000webhostapp.com/cpf.php");
	$json_str = json_decode($json_file, true);
    $obj = json_decode($json_file);
    $var = $obj->{'score'};
    #echo $var;
    
    #die();
	$score = $var;
	$msgSucesso = "Parabéns!";
	$msgErro = "Sinto Muito!";
	?>

	<?php
if ($score >= 400):
	require 'botService.php';

endif;
?>
</html>