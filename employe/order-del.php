<?php
	include "config.php";
	$sql="DELETE FROM cusorder where med_id='$_GET[mid]'";
	if ($conn->query($sql)){
	header("location:pos3e.php");
	exit();
	}
	else
	echo "Error";
?>


