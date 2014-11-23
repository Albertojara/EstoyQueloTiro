<?php
if($_POST["nombre"]!=""){
	$nombre=$_POST["nombre"];
}
if($_POST["email"]!=""){
	$email=$_POST["email"];
}
if($_POST["mensaje"]!=""){
    $mensaje=$_POST["mensaje"];
}

$para      = 'estoyquelotirosw@gmail.com';
$titulo    = 'Correo de Estoyquelotiro';
$mensajefinal   = " Nombre : ".$nombre."\n  La cuenta de correo es : ".$email." \n Mensaje : ".$mensaje;
$hola="hola";

mail($para,$titulo,$mensajefinal);

header("Location: http://estoyquelotiro.co");


?>