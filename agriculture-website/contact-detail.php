<?php include("include/config.php"); 

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
  
  $q=mysqli_query($con,"INSERT INTO `contact_detail`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')");

  	if ($q) {
       echo "your message has been successfully uploaded";
    }   
     else{
      echo "Error: Please try again";                                        
    }


?>