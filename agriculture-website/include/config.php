<?php
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agri_info";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
 //echo "Connected successfully";

 die("Connection failed: " . $conn->connect_error);
}

define('APPURL', 'http://localhost/agriculture');
define('PRODUCT_IMG', APPURL.'/admin/assets/product_image/');


?>