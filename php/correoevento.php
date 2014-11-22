<?php
if($_POST["nombre"]!=""){
	$nombre=$_POST["nombre"];
}
if($_POST["email"]!=""){
	$email=$_POST["email"];
}
if($_POST["telefono"]!=""){
	$telefono=$_POST["telefono"];
}
if($_POST["titulo"]!=""){
	$titulo=$_POST["titulo"];
}
if($_POST["fecha"]!=""){
	$fecha=$_POST["fecha"];
}
if($_POST["localizacion"]!=""){
	$localizacion=$_POST["localizacion"];
}
if($_POST["hora"]!=""){
	$hora=$_POST["hora"];
}
if($_POST["precioinicial"]!=""){
	$precioinicial=$_POST["precioinicial"];
}
if($_POST["preciominimo"]!=""){
	$preciominimo=$_POST["preciminimo"];
}

$para      = 'tojarandroid@gmail.com';
$titulo    = 'Correo de Evento';
$mensaje   = "Nombre : ".$nombre." <br><br> E-mail : ".$email. "<br><br> Telefono : ".$telefono."<br><br> Titulo del Evento : ".$titulo."<br><br> Fecha : ".$fecha." <br><br> Localizacion : ".$localizacion." <br><br> Hora: ".$hora." <br><br> Precio Inicial : ".$precioinicial." <br><br> Precio Mínimo : ".$preciominimo;
$hola="hola";

mail($para,$titulo,$mensaje);

//header("Location: http://estoyquelotiro.co");


?>