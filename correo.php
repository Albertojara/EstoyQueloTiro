<?php
if($_POST["cuenta"]!=""){
	$cuenta=$_POST["cuenta"];
}
if($_POST["correo"]!=""){
	$correo=$_POST["correo"];
}

$para      = 'tojarandroid@gmail.com';
$titulo    = 'Entrada de Malú';
$mensaje   = "la cuenta de twitter es ".$cuenta."la cuenta de correo es".$correo;
$hola="hola";

mail($para, $titulo,$mensaje);

header("Location: http://estoyquelotiro.co");


?>oy