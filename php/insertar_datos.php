<?php

	$username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdunad18";


	$id = $_POST['id'];
	$nombre =$_POST['producto'];
	$marca = $_POST['marca'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];



	$con = new mysqli("$host", "$username", "$password", "$bd");

	if ($con->connect_error) {
		die("conexion fallida". $con->connect_error); 
	}


	$sql = "INSERT INTO `tabla18` (`id`, `nombre`, `marca`, `precio`, `cantidad`) 
	VALUES ('$id', '$nombre', '$marca', '$precio', '$cantidad')";

	if (mysqli_query($con,$sql)){
		echo "datos guardados correctamente";
	}else {
		echo "Error al guardar datos: ".$sql. mysqli_error($con);
			
	}

	mysqli_close($con)

?>