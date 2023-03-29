<?php include"include/config.php";
$pageid =$_POST['id'];
$cname=$_POST['cname'];
$q ="UPDATE `category` SET `category_name` = '".$cname."' WHERE `category`.`id` ='".$pageid."'";
$result = $con->query($q);
if ($result) {
       echo "Records was updated successfully.";
    }   
     else{
      echo "ERROR: Could not able to update . ";                                        
    }
?>
