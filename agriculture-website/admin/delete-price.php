<?php 
include"include/config.php";
$pageid = $_GET['id'];
$q = "DELETE FROM `market_price` WHERE `id` ='".$pageid."'";

$result = $con->query($q);
if ($result) {
        echo "Records was deleted successfully.";
        header('Location:view-price.php');
    }    else{
      echo "ERROR: Could not able to delete . "; 
    }


   
?>