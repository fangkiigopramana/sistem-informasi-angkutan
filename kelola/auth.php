<?php
	//including the database connection file
	include_once("config.php");
	
	if(isset($_POST['login'])) {	
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
		$password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $query_sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($mysqli, $query_sql);

    if(mysqli_num_rows($result) > 0){
        echo "<h1>Selamat Datang, ".$username."!</h1>";
        header("Location: admin.php");	
    }else{
        header("Location: login.php");
    }
  }
  ?>