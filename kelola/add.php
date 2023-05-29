<html>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>	
	<title>Admin | Tambah Data</title>
</head>

<body>
	<div class="container m-5">
	<?php
	//including the database connection file
	include_once("config.php");
	
	if(isset($_POST['Submit'])) {	
		$tahun = mysqli_real_escape_string($mysqli, $_POST['tahun']);
		$motor = mysqli_real_escape_string($mysqli, $_POST['motor']);
		$mobil = mysqli_real_escape_string($mysqli, $_POST['mobil']);
		$jumlah = $motor + $mobil;
			
		$result = mysqli_query($mysqli, "INSERT INTO data_pelanggar(tahun,motor,mobil,jumlah) VALUES('$tahun','$motor','$mobil','$jumlah')");
		// var_dump($tahun);
	}
	?>
	<div class="text-center">
		<h5>!!Data Berhasil Masuk!!</h5>
		<hr>
		<p><a href="admin.php" data-bs-toggle="tooltip" title="Tooltip">Kembali ke Home</a></p>
		</div>
	</div>
</body>
</html>
