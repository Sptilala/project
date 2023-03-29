<?php
include('config.php');

/**
 * Login process
 */
if( $_POST['sub'] == 'login' )
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$q = "SELECT * from `admin` WHERE username = '$username' AND password = '$password'";
	$result = $con->query($q);
	$result=mysqli_fetch_array($result);

	if( $result )
	{
		 $_SESSION['username'] = $username;
		header("Location: ../index.php");
		exit;
	} else {
		$_SESSION['error'] = "Login details is not valid.!";
		header('Location:../lock-screen.php');
		exit;
	}
}
exit;