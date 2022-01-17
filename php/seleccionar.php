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


	$sql = "SELECT id, nombre, marca, precio, cantidad FROM tabla18 WHERE id=$id";
	$result=mysqli_query($con, $sql);

	if (mysqli_num_rows($result)){
		while ($row = mysqli_fetch_assoc($result)) {			
			echo '<link href="../css/style.css" type="text/css" rel="stylesheet">';

			echo "<div id='datos_consulta'>"."id: ".$row["id"]."<br>"."Nombre: ".$row["nombre"]."<br>"."marca: ".$row["marca"]."<br>"."precio: ".$row["precio"]."<br>"."cantidad: ".$row["cantidad"]."<br>"."</div>";
		}
		
	}else {
		echo "Error al guardar datos: ".$sql. mysqli_error($con);
			
	}

	mysqli_close($con)

?>