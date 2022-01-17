<?php

$username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdunad18";

	$con = new mysqli("$host", "$username", "$password", "$bd");

	if ($con->connect_error) {
		die("conexion fallida". $con->connect_error); 
	}

$sql = "CREATE TABLE tabla18(
	id INT(11) PRIMARY KEY,
	nombre VARCHAR(50) NOT NULL,
	marca VARCHAR(20) NOT NULL,
	precio INT(10) NOT NULL,
	cantidad INT(10) NOT NULL
)";

if($con->query($sql) === true){
	echo "la tabla se creó correctamente";
}else{
	echo "error al crear base de datos ".$con->error;
}

?>