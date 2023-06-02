	<?php
	//including the database connection file
	include_once '../../database/config.php';


	if(isset($_POST['send'])) {	
	$nama_angkutan = mysqli_real_escape_string($mysqli, $_POST['nama_angkutan']);
	$merk = mysqli_real_escape_string($mysqli, $_POST['merk']);
	$no_kendaraan = mysqli_real_escape_string($mysqli, $_POST['no_kendaraan']);
	$rute = mysqli_real_escape_string($mysqli, $_POST['rute']);
	$kapasitas = mysqli_real_escape_string($mysqli, $_POST['kapasitas']);
	$tanggal_berangkat = mysqli_real_escape_string($mysqli, $_POST['tanggal_berangkat']);
	
	$result = mysqli_query($mysqli, "INSERT INTO angkutan_tb(nama_angkutan,	merk, no_kendaraan, rute, kapasitas, tanggal_berangkat) VALUES('$nama_angkutan',	'$merk', '$no_kendaraan', '$rute', '$kapasitas', '$tanggal_berangkat')");
	header("Location: http://localhost/sistem-informasi-angkutan/daftar-angkutan.php");
	exit;
	}
	?>
