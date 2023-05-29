<?php

$databaseHost = 'localhost';
$databaseName = 'angkutan_database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$data_angkutan = mysqli_query($mysqli, "SELECT * FROM angkutan_tb"); 
$data_rute = mysqli_query($mysqli, "SELECT * FROM rute_tb"); 
$data_admin = mysqli_query($mysqli, "SELECT * FROM admin_tb"); 

?>
