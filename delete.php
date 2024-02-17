<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `user_emp` where id='$id'");
	header('location:index.php');
?>