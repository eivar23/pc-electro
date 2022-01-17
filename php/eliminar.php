<?php

	$username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdunad18";


	$id = $_POST['id'];
	

	$con = new mysqli("$host", "$username", "$password", "$bd");

	if ($con->connect_error) {
		die("conexion fallida". $con->connect_error); 
	}


	$resulta=mysqli_query($con, "DELETE FROM tabla18 WHERE id='$id'")
		or die("Error al actualizar");



	mysqli_close($con)


?>