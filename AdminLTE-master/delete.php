<?php

include"include/connection.php";

$table=$_GET['table'];
$id=$_GET['delete'];
$filename=$_GET['filename'];

$result=mysqli_query($conn,"DELETE FROM $table  WHERE ID=$id");
	if ($result) {

		header("location:$filename");
	}




?>