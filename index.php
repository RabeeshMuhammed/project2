<?php
include "form.php";
?>



<style>
    table {
        margin-top: 20px;
        margin-right: 200px;

    }

    .bd-example {

        margin-left: 200px;
    }

    .table-scroll tbody {
        position: absolute;
        /*        overflow-y: scroll;*/
        overflow-x: hidden;
        height: 230px;
    }

</style>


<div class="well">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <table class="table table-hover table-responsive  table-primary">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم الاول</th>
                            <th scope="col">الاسم الثاني</th>
                            <th scope="col">العنوان</th>
                            <th scope="col">العمر</th>
                            <th scope="col">الجنس</th>
                            <th scope="col">التعديل</th>
                            <th scope="col">الحذف</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php


include ('conn.php');

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 3;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM user_emp ");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; 

$query=mysqli_query($conn,"select * from `user_emp` LIMIT $offset, $total_records_per_page");
while($row=mysqli_fetch_array($query)){
?>
                        <tr>
                            <td><?php echo $row ['id'] ;?></td>
                            <td><?php echo $row ['firstname'] ;?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['addr']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['sex']; ?></td>

                            <td> <a class="btn btn-success" href="edit.php?id_edit=<?php echo $row ['id']?>"> تعديل</a></td>

                            <td> <a class="btn btn-danger" onclick='return confirm ("هل تريد الحذف")' href="delete.php?id=<?php echo $row ['id']?>">حذف</a></td>
                        </tr>
                        <?php

}

?>


                        <div class="bd-example">
                            <nav aria-label="Another pagination example">

                                <strong>صفحة <?php echo $page_no." من ".$total_no_of_pages; ?></strong>


                                <ul class="pagination pagination-lg flex-wrap">
                                    <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

                                    <li <?php if($page_no <= 1){ echo "class='page-item disabled'"; } ?>>
                                        <a class='page-link' <?php if($page_no > 1){ echo "href='?page_no=$previous_page'class='age-link'"; } ?>>السابق</a>
                                    </li>

                                    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a class='page-link'>$counter</a></li>";	
				}else{
           echo "<li><a  class='page-link' href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>

                                    <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
                                        <a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>التالي</a>
                                    </li>
                                    <?php if($page_no < $total_no_of_pages){
		echo "<li><a class='page-link' href='?page_no=$total_no_of_pages'>اخر صفحه&rsaquo;&rsaquo;</a></li>";
		} ?>
                                </ul>
                    </tbody>
                </table>
                </nav>
            </div>
        </div>
    </div>
