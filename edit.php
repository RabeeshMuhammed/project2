<?php
	include('conn.php');
	$id=$_GET['id_edit'];
	$query=mysqli_query($conn,"select * from `user_emp` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/emp.css">
    <title>تعديل</title>
</head>
<body>
     
<div class="container justify-content-center">
<div class="mb-3 row justify-content-center">
<div class="col-sm-4">
<form method="POST" action="update.php?id_edit=<?php echo $id;  ?>">
<label  class="col-sm-2 col-form-label" >الاسم الاول</label>
<input class="form-control" type="text" name="firstname" required value="<?php echo $row ['firstname']  ?>">

<label  class="col-sm-2 col-form-label">الاسم الثاني</label>
<input class="form-control" type="text" name="lastname" required value="<?php echo $row ['lastname']  ?>">


<label  class="col-sm-2 col-form-label">العنوان </label>
<input class="form-control" type="text" name="addr" required value="<?php echo $row ['addr']  ?>">


<label  class="col-sm-2 col-form-label">العمر </label>
<input class="form-control" type="number" name="age" required value="<?php echo $row ['age']  ?>">
<br>
<select class="form-select" name="sex" value="<?php echo $row ['sex']  ?>">
<option>ذكر</option>
<option>إنثى</option>
</select>
<br><br>
<input type="submit" value="تعديل" class=" btn btn-primary" name="">


</form>

</div>

</div>



</div> 

</body>
</html>

 