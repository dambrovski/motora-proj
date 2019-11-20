<?php

#var_dump($_POST);

#die();
#$nomeT = $data['nome'];
$nomeT = $_POST['nome'];

$chat_id='113116753';
$token='1024582533:AAGZ2Qo_w72CPy8tOrmt492NzlcS7u99L-E';
$mensagem="Olá! ".$nomeT." você foi aceito na Road-Motora!";
$url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem."";
$execucao = file_get_contents($url);
require 'rabbit/send.php';

?>


<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>