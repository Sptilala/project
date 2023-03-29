<?php 

session_start();

session_destroy();

header('Location: lock-screen.php');

 ?>