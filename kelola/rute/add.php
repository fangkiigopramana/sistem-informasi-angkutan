<?php
	//including the database connection file
	include_once '../../database/config.php';


	if(isset($_POST['send'])) {	
	$asal = mysqli_real_escape_string($mysqli, $_POST['asal']);
	$tujuan = mysqli_real_escape_string($mysqli, $_POST['tujuan']);
	$jarak_tempuh = mysqli_real_escape_string($mysqli, $_POST['jarak_tempuh']);
	
	$result = mysqli_query($mysqli, "INSERT INTO rute_tb(asal, tujuan, jarak_tempuh) VALUES('$asal', '$tujuan', '$jarak_tempuh')");
	header("Location: http://localhost/sistem-informasi-angkutan/daftar-rute.php");
	exit;
	}
	?>
