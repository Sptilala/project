<?php 
include"include/config.php";
$pageid = $_GET['id'];
$q = "DELETE FROM category where id =".$pageid."";
$result = $con->query($q);
if ($result) {
        echo "Records was deleted successfully.";
        header('Location:view-category.php');
    }    else{
      echo "ERROR: Could not able to delete . "; 
    }


   
?>