<?php 
  include("conn.php");
  
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM user_emp WHERE firstname LIKE '$name%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
    ?>
       $data .=  
       <tr>
<td><?php echo $row ['id'] ;?></td>
<td><?php echo $row ['firstname'] ;?></td>
<td><?php echo $row['lastname']; ?></td>
<td><?php echo $row['addr']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['sex']; ?></td>
<td> <a class="btn btn-success" href="#=<?php echo $row ['id']?>"> تعديل</a></td>

<td> <a class="btn btn-danger" onclick='return confirm ("هل تريد الحذف")' href="#=<?php echo $row ['id']?>">حذف</a></td>
</tr>
   </tr>
<?php
   }
    echo $data;
 ?>
