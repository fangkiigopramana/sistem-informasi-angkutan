<?php

$databaseHost = 'localhost';
$databaseName = 'angkutan_database';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$data_angkutan = mysqli_query($mysqli, "SELECT * FROM angkutan_tb"); 
$data_rute = mysqli_query($mysqli, "SELECT * FROM rute_tb"); 
$data_admin = mysqli_query($mysqli, "SELECT * FROM admin_tb"); 

$query = 'SELECT A.nama_angkutan AS "nama_angkutan", A.harga_tiket AS "harga_tiket", A.tanggal_berangkat AS "tanggal_berangkat", R.jam_berangkat AS "jam_berangkat", R.jam_tiba AS "jam_tiba", R.durasi AS "durasi", R.asal AS "asal", R.tujuan AS "tujuan" FROM angkutan_tb A INNER JOIN rute_tb R ON A.id_rute = R.id_rute';
$data_angkutan_rute = mysqli_query($mysqli, $query);
// var_dump($data_angkutan_rute);
// while($res = mysqli_fetch_array($data_angkutan_rute)) { 
//     var_dump($res);
// }

