<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$project=$_POST['project'];
$message=$_POST['message'];

$header='From:'. $email ."\r\n";
$asunto='Propuesta de proyecto:'.$project;

$body="Este mensaje fue enviado por:". $name ."\r\n";
$body.="Su email es:". $email ."\r\n";
$body.="Su Propuesta es:". $project ."\r\n";
$body.="Su Mensaje es:". $message ."\r\n";





$para='salguero.contacto@gmail.com'


mail($para,$asunto,utf8_decode($body),$header);

header('Location:index.html')
?>