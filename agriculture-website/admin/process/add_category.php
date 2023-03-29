<?php include('../include/config.php'); 


  $name=$_POST['cname'];
  $sql= mysqli_query($con,"INSERT INTO category (category_name) VALUES('".$name."')");


?>
