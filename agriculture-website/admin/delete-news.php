<?php 
include"include/config.php";
$pageid = $_GET['id'];
$q = "DELETE FROM daily_news where id =".$pageid."";
$result = $con->query($q);
if ($result) {
        echo "Records was deleted successfully.";
        header('Location:view-news.php');
    }    else{
      echo "ERROR: Could not able to delete . "; 
    }
?>