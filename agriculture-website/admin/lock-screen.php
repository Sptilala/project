<?php
session_start();

if( !empty($_SESSION['username']) ) {
	header("location: index.php");
	exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title></title>
</head>

<body class="bg-lock-screen">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">
					<h2 class="text-white">
                     						 <?php
													date_default_timezone_set('UTC');
											?>
													<script>
													var d = new Date(<?php echo time() * 1000 ?>);
													function digitalClock() {
													  d.setTime(d.getTime() + 1000);
													  var hrs = d.getHours();
													  var mins = d.getMinutes();
													  var secs = d.getSeconds();
													  mins = (mins < 10 ? "0" : "") + mins;													  
													  var apm = (hrs < 12) ? "am" : "pm";
													  hrs = (hrs > 12) ? hrs - 12 : hrs;
													  hrs = (hrs == 0) ? 12 : hrs;
													  var ctime = hrs + ":" + mins +  " " + apm;
													  document.getElementById("clock").firstChild.nodeValue = ctime;
													}
													window.onload = function() {
													  digitalClock();
													  setInterval('digitalClock()', 1000);
													}
													</script>
													<div id="clock"> </div>
													</h2>
													<h5 class="text-white">

                         							 <?php
													echo "" . date("d/m/Y") . "<br>";

													echo "" . date("l");
													?>

					</h5>
					<div class="">
						<img src="assets/images/icons/user.png" class="mt-5" width="120" alt="" />
					</div>
					<p class="mt-2 text-white">Administrator</p>
					
					<?php if (isset($_SESSION['error'])) {
						echo "<p class='mt-2 text-white'>Invalid Credential</p>";
					} else {} unset($_SESSION['error']); ?>
					<form action="http://localhost/agriculture-website/admin/include/process.php" method="post">
					<div class="mb-3 mt-3">
							<input type="text" name="username" class="form-control" placeholder="username" required ><br>
					</div> 
					<div class="mb-3 mt-3">
							<input type="password" name="password" class="form-control"  placeholder="Password" required />
					</div>
					<div class="d-grid">
							<input type="submit" value="login" name="sub" class="btn btn-white">
					</div>
			

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>