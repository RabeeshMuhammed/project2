<!DOCTYPE html>
<html dir="rtl">

<head>

    <title>صفحه البحث</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
</head>



<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <form method="post" action="">
                <br />
                <p style="font-size:18px; margin-left:100px;">بحث بالاسم
                    <input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" class="textboxclass" />

                    <input type="submit" style="font-size:18px; margin-top:-9px;" class="btn btn-primary" name="submit" value="بحث">
                </p>

            </form>

            <a href="index.php"><input type="submit" style="font-size:16px; margin-top:10px;" class="btn btn-info" name="submit" value="الرجوع للصفحة الرئيسية"></a>
            <br>
            <br>
            <table class="table  table-hover table-responsive  table-primary">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم الاول</th>
                        <th scope="col">الاسم الثاني</th>
                        <th scope="col">العنوان</th>
                        <th scope="col">العمر</th>
                        <th scope="col">الجنس</th>
                    </tr>


                </thead>
                <tbody>
                    <?php
include ('conn.php');

error_reporting(0);
if ($_POST['submit']) {
$search_file = $_POST['search_file'];

$sql=mysqli_query($conn,"select * from user_emp where firstname like '%$search_file%'
 or lastname like '%$search_file%'  or age like '%$search_file%' Order by lastname ASC");


			if (empty($search_file)) {
			echo '<script language="javascript">';
			echo 'alert("عليك بملئ الحقل الرجاء المحاوله مره اخرى")';
			echo '</script>';
			header( "refresh:2; url=index.php" ); 
			}
			else if (mysqli_num_rows($sql) > 0) 
			{            
			$i = 1;
			while ($row = mysqli_fetch_array($sql)) {
				?>
                    <tr>
                        <td><?php echo $row ['id'] ;?></td>
                        <td><?php echo $row ['firstname'] ;?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['addr']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['sex']; ?></td>
                    </tr>
                    <?php
			$i++;
			}
			} 
			else 
			{
			echo '<div class="alert alert-danger" style="width:130px; 
			float:left; margin-top:-142px;">لاتوجد نتائج</div>';
			}
			
			?>


                    <?php

}

?>



                </tbody>
            </table>

        </div>
    </div>
</div>

</html>
