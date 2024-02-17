<?php
include "conn.php";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$addr=$_POST['addr'];
$age=$_POST['age'];
$sex=$_POST['sex'];

mysqli_query($conn,"insert into `user_emp` (firstname,lastname,addr,age,sex)
values ('$firstname','$lastname','$addr','$age','$sex')");

header ('location:index.php')


?>