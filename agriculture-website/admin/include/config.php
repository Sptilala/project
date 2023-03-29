<?php
session_start();

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

define('APPURL', 'http://localhost/agriculture-website/admin');
define('UPLOADPATH', __DIR__.'D:\xampp\htdocs\agriculture-website\admin\assets\product_image');

?>