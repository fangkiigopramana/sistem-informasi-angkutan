<?php

include("config.php");


$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM data_pelanggar WHERE id=$id");


header("Location:admin.php");
?>

