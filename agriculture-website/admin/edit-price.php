<?php include"include/config.php";

$pageid = $_POST['id'];
$product_name=$_POST['product_name'];
$min_price=$_POST['min_price'];
$max_price=$_POST['max_price'];


$q ="UPDATE `market_price` SET `product_name` = '".$product_name."' , `min_price`= '".$min_price."' , `max_price`= '".$max_price."' WHERE `id` ='".$pageid."'";

$result = $con->query($q);
if ($result) {
	echo "Records was updated successfully.";
}
else{
      echo "ERROR: Could not able to update . ";                                        
    }


?>