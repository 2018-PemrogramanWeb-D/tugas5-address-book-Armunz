<?php
$databaseHost = 'localhost';
$databaseName = 'addbook';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli){
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
