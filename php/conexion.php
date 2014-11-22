
<?php
header('Content-Type: text/html; charset=UTF-8'); 
$server="localhost";//guardo el servidor
$userbd="root";//guardo el usuario del servidor
$passbd="";//guardo el password de el servidor
$bd="yeguada";//guardo la base de datos
$urlerror="index.php";//guardo la url a la cual se pasaran los errores
$conexion=@mysql_connect($server,$userbd,$passbd);//realizo la conexion pasandole el nombre , el usuario y la contraseña del servidor



if(!$conexion){ // si no existe conexion ejecuta el siguiente codigo que lanzara un error un otro dependiendo de lo que falle

	$error=mysql_errno(); // guardo el error en la variable error

	header("location:".$urlerror."?error=".$error); //y lo envio a el index con la variable error y el numero

	exit(1);// el programa se ha terminado 
}



$enlace = mysql_select_db($bd,$conexion); // ejecuto el enlace con la base de datos pasandole la base de datos y la conexion

if(!$enlace){// si no existe conexion con la base de datos continua el codigo

	$error=mysql_errno(); // guardo el error registrado en la variable error

	header("location:".$urlerror."?error=".$error); // mando el error por la url al index

	exit(1);// el programa se ha terminado 
}





?>

  

