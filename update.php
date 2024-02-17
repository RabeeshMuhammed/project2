<?php
	include('conn.php');
	$id=$_GET['id_edit'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$addr=$_POST['addr'];
    $age=$_POST['age'];
    $sex=$_POST['sex'];

	mysqli_query($conn,"update `user_emp` set firstname='$firstname',
    lastname='$lastname',addr='$addr',age='$age',sex='$sex' where id='$id'");

	header('location:index.php');
?>