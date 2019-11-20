<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
$channel->queue_declare('positivo', false, false, false, false);
$nomeT = $_POST['nome'];
$emailT = $_POST['email'];
$sexoT = $_POST['sexo'];
$cpfT = $_POST['cpf'];
$msg2 = "Novo Motorista(a) Cadastrado na Plataforma \n Nome: "
.$nomeT."\n Email: ".$emailT." \n Sexo: ".$sexoT." \n CPF: ".$cpfT;

$msg = new AMQPMessage($msg2);
$channel->basic_publish($msg, '', 'positivo');
#echo " [x] Sent 'Hello World!'\n";
$channel->close();
$connection->close();
?>