<?php
include('../include/config.php');

$pageid =$_POST['id'];
$product_name=$_POST['product_name'];
$minprice=$_POST['min_price'];
$maxprice=$_POST['max_price'];

$q=mysqli_query($con,"INSERT INTO `market_price`(`yard_id`, `product_name`, `min_price`, `max_price`) VALUES ('".$pageid."','".$product_name."','".$minprice."','".$maxprice."')");

if ($q) {
       echo "success";
    }   
     else{
      echo "fail";                                        
    }

?>