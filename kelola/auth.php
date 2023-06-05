<?php
	//including the database connection file
	include_once("../database/config.php");
	
	if(isset($_POST['login'])) {	
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
		$password = mysqli_real_escape_string($mysqli, $_POST['sandi']);
    $query_sql = "SELECT * FROM admin_tb WHERE email = '$email' AND sandi = '$password'";
    $result = mysqli_query($mysqli, $query_sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: http://localhost/sistem-informasi-angkutan/dashboard.php");	
    }else{
        header("Location: http://localhost/sistem-informasi-angkutan/login.php");
    }
  }
  ?>