<?php
	
	$username = "root";
	$host ="localhost";
	$password = "12345678";


	$con = new mysqli("$host", "$username", "$password");

	if ($con->connect_error) {
		die("conexion fallida". $con->connect_error); 
	}

	$sql ="CREATE DATABASE bdunad18";
	if ($con->query($sql)===true){
		echo "base de datos creada";
	}else {
		echo "Error al crear base de datos: ".$con->error;
	}
?>