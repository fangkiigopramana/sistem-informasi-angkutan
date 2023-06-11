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
	$jam_berangkat = mysqli_real_escape_string($mysqli, $_POST['jam_berangkat']);
	$jam_tiba = mysqli_real_escape_string($mysqli, $_POST['jam_tiba']);

	$waktu1 = new DateTime($jam_berangkat);
	$waktu2 = new DateTime($jam_tiba);
	$selisih = $waktu2->diff($waktu1);
	$jam = $selisih->format('%h');
	$menit = $selisih->format('%i');
	$durasi = $jam*60+$menit;

	$harga_tiket = mysqli_real_escape_string($mysqli, $_POST['harga_tiket']);
	$jam*60+$menit ;
	$result = mysqli_query($mysqli, "INSERT INTO angkutan_tb(nama_angkutan,	merk, no_kendaraan, rute, kapasitas, tanggal_berangkat, jam_berangkat, jam_tiba, durasi, harga_tiket) VALUES('$nama_angkutan',	'$merk', '$no_kendaraan', '$rute', '$kapasitas', '$tanggal_berangkat', '$jam_berangkat', '$jam_tiba', '$durasi', '$harga_tiket')");
	header("Location: http://localhost/sistem-informasi-angkutan/daftar-angkutan.php");
	exit;
	}
	?>
