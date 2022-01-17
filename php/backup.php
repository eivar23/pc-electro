<?php

date_default_timezone_get("America/Bogota");
	

	$username = "root";
	$host ="localhost";
	$password = "12345678";
	$bd = "bdunad18";

$dump='"C:\xampp\mysql\bin\mysqldump.exe"';
$backupfile ='"C:\Appserve\www\psw5\backups\"'.$db."-".date("Y-m-d-H-i-s").".sql";
system("mysqldump --no-defaults -u $dbuser -p$dbpass $dbname > $backup_file");


?>