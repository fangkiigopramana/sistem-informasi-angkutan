<?php

include("../../database/config.php");


$id = $_GET['id_angkutan'];


$result = mysqli_query($mysqli, "DELETE FROM angkutan_tb WHERE id_angkutan=$id");


header("Location:/sistem-informasi-angkutan/daftar-angkutan.php");
?>

