<?php

$databaseHost = 'localhost';
$databaseName = 'angkutan_database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$data_angkutan = mysqli_query($mysqli, "SELECT * FROM angkutan_tb"); 
$data_rute = mysqli_query($mysqli, "SELECT * FROM rute_tb"); 
$data_admin = mysqli_query($mysqli, "SELECT * FROM admin_tb"); 

$data_angkutan_rute = mysqli_query($mysqli, "SELECT * FROM angkutan_tb A INNER JOIN rute_tb R ON A.rute = R.id_rute");
// var_dump($data_angkutan_rute);
// while($res = mysqli_fetch_array($data_angkutan_rute)) { 
//     var_dump($res);
// }

