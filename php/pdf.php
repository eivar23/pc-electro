<?php
include 'db.php'
include("../auth.php");
require('C:\xampp\mysql\bin\mysqldump');

$username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdunad18";




$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 16);
$pdf->Image('../img/unad.png');
$pdf->Ln(20);
$pdf->Cell(90,20,utf8_decode('REPORTES_PDF'));
$pdf->Ln(10);
$pdf->SetFont('Arial','B', 8);
$pdf->Cell(20,20,'ID');
$pdf->Cell(20,20,'PRODUCTO');
$pdf->Cell(20,20,'MARCA');
$pdf->Cell(20,20,'PRECIO');
$pdf->Cell(20,20,'CANTIDAD');

$pdf->Ln(10);


$pdf->SetFont('Arial','B', 8);
$con = new mysqli("$host", "$username", "$password", "$bd");

if (!$con) {
	die("conexion fallida: " .mysqli_connect_error());

}

$sql = "SELECT * FROM myguests";
	$result=mysqli_query($con, $sql);

if (mysql_num_rows($result) >0) {
		while($reg = mysqli_fetch_assoc($result)){

	$pdf->Cell(20,20,$reg['id'],0);
	$pdf->Cell(20,20, utf8_decode($reg['nombre']),0);
	$pdf->Cell(20,20, utf8_decode($reg['marca']),0);
	$pdf->Cell(20,20, utf8_decode($reg['precio']),0);
	$pdf->Cell(20,20, utf8_decode($reg['cantidad']),0);


	}
}

$pdf->Output();




?>