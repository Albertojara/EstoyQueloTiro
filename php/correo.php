<?php
if($_POST["cuenta"]!=""){
	$cuenta=$_POST["cuenta"];
}
if($_POST["correo"]!=""){
	$correo=$_POST["correo"];
}
if($_POST["price"]!=""){
    $price=$_POST["price"];
}

$para      = 'estoyquelotirosw@gmail.com';
$titulo    = 'Entrada de Malú';
$mensaje   = "la cuenta de twitter es ".$cuenta." la cuenta de correo es ".$correo." al siguiente precio " .$price;
$hola="hola";

mail($para,$titulo,$mensaje);

header("Location: http://estoyquelotiro.co");


?>