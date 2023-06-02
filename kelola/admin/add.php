<?php
	//including the database connection file
	include_once '../../database/config.php';


	if(isset($_POST['send'])) {	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$sandi = mysqli_real_escape_string($mysqli, $_POST['sandi']);
	
	$result = mysqli_query($mysqli, "INSERT INTO admin_tb(nama,	email, sandi) VALUES('$nama',	'$email', '$sandi')");

    header("Location: http://localhost/sistem-informasi-angkutan/daftar-user.php");
	exit;
	}
	?>
