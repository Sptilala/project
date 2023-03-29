<?php include('config.php'); 
if( !isset($_SESSION['username']) ) {
header("location: lock-screen.php");
}
?>
<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--favicon-->
<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
<!--plugins-->
<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
<link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<!-- loader-->
<link href="assets/css/pace.min.css" rel="stylesheet" />
<script src="assets/js/pace.min.js"></script>
<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link href="assets/css/app.css" rel="stylesheet">
<link href="assets/css/icons.css" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="assets/css/dark-theme.css" />
<link rel="stylesheet" href="assets/css/semi-dark.css" />
<link rel="stylesheet" href="assets/css/header-colors.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Admin - Agricluture</title>
</head>

<body class="  pace-done" style="text-transform: capitalize;">
<!--wrapper-->
<div class="wrapper">
<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="assets/images/979dd62b85bab4d2e54ab50cd1d176c9.jpg" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">Agriculture</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
		</div>
	</div>
	<!--navigation-->
<ul class="metismenu" id="menu">
<li>
<a href="javascript:;" class="has-arrow">
	<div class="parent-icon"><i class='bx bx-spa' ></i>
	</div>
	<div class="menu-title">Category</div>
</a>

<ul>
	<li> <a  href="add-new-category.php"><i class="bx bx-right-arrow-alt"></i>Add New Category</a>
	</li>
	<li> <a  href="view-category.php"><i class="bx bx-right-arrow-alt"></i>View Category</a>
	</li>
</ul>
</li>
<li>
<a href="javascript:;" class="has-arrow">
	<div class="parent-icon"><i class='bx bx-spa' ></i>
	</div>
	<div class="menu-title">Product</div>
</a>
<ul>
	<li> <a  href="add-product.php"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
	</li>
	<li> <a href="view-product.php"><i class="bx bx-right-arrow-alt"></i>View Product</a>
	</li>
</ul>
</li>
<li>
<a href="javascript:;" class="has-arrow">
	<div class="parent-icon"><i class='bx bx-spa' ></i>
	</div>
	<div class="menu-title">Market data</div>
</a>
<ul>
	<li> <a href="add-price.php"><i class="bx bx-right-arrow-alt"></i>Add Price</a>
	</li>
	<li> <a  href="marketing-price-system.php"><i class="bx bx-right-arrow-alt"></i> View Price </a>
	</li>
	<li> <a  href="view-price.php"><i class="bx bx-right-arrow-alt"></i> View Price Entry</a>
	</li>
</ul>
</li>
<li>
<a href="javascript:;" class="has-arrow">
	<div class="parent-icon"><i class='bx bx-spa' ></i>
	</div>
	<div class="menu-title">News</div>
</a>
<ul>
	<li> <a  href="news.php"><i class="bx bx-right-arrow-alt"></i>Add News</a></li>
	<li> <a  href="view-news.php"><i class="bx bx-right-arrow-alt"></i>View News</a></li>
</ul>
</li>
<li>
<a href="logout.php" class="has-arrow-">
	<div class="parent-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<i class='fa fa-sign-out'></i>
	</div>
	<div class="menu-title">Logout</div>
</a>
</li>
	
			
	
</ul>
		
		
		
	
	<!--end navigation-->
</div>
<!--end sidebar wrapper -->
<!--start header -->
<header>
	<div class="topbar d-flex align-items-center bg-dark shadow-none border-light-2 border-bottom">
		<nav class="navbar navbar-expand">
			<div class="mobile-toggle-menu text-white me-3"><i class='bx bx-menu'></i>
			</div>
			<div class="top-menu-left d-none d-lg-block">
		 	 <ul class="nav">
				<li class="nav-item">
				  <a class="nav-link text-white" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="app-chat-box.html"><i class='bx bx-message'></i></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
				</li>
			</ul>
		   </div>
			<div class="search-bar flex-grow-1">
				<div class="position-relative search-bar-box">
					<form>
					  <input type="text" class="form-control search-control" autofocus placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
					   <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
				    </form>
				</div>
			</div>
			<div class="top-menu ms-auto">
				<ul class="navbar-nav align-items-center">
					<li class="nav-item mobile-search-icon">
						<a class="nav-link text-white" href="javascript:;">	<i class='bx bx-search'></i>
						</a>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div class="row row-cols-3 g-3 p-3">
								<div class="col text-center">
									<div>
										<meta name='viewport' content='width=device-width, initial-scale=1'>
										<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
										<a href="view-category.php"><i class='fas fa-leaf' style='font-size:36px;color: green;'></i></a>
									</div>
									<div class="app-title">Category</div>
								</div>
								<div class="col text-center">
									<div ><a href="view-product.php"><i class='fas fa-seedling' style='font-size:36px;color:green;'></i></a>
									</div>
									<div class="app-title">Product</div>
								</div>
								<div class="col text-center">
									<div><a href="marketing-price-system.php"><i class="fa fa-line-chart" style="font-size:36px"></i></a>
									</div>
									<div class="app-title">Market Price</div>
								</div>
								<div class="col text-center">
									<div>
										<meta name="viewport" content="width=device-width, initial-scale=1">
										<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
										<i class="fa fa-bell-o" style="font-size:36px"></i>
									</div>
									<div class="app-title">Notification</div>
								</div>
								<div class="col text-center">
									<div><i class='fas fa-file' style='font-size:36px;color:blue;'></i>
									</div>
									<div class="app-title">Files</div>
								</div>
								<div class="col text-center">
									<div><i class='fas fa-exclamation-triangle' style='font-size:36px;color:red'></i>
									</div>
									<div class="app-title">Alerts</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
							<i class='bx bx-bell'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Notifications</p>
									<p class="msg-header-clear ms-auto">Marks all as read</p>
								</div>
							</a>
							<div class="header-notifications-list">
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
										ago</span></h6>
											<p class="msg-info">5 new user registered</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
										ago</span></h6>
											<p class="msg-info">You have recived new orders</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
										ago</span></h6>
											<p class="msg-info">The pdf files generated</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
										ago</span></h6>
											<p class="msg-info">5.1 min avarage time response</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Product Approved <span
										class="msg-time float-end">2 hrs ago</span></h6>
											<p class="msg-info">Your new product has approved</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
										ago</span></h6>
											<p class="msg-info">New customer comments recived</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
										ago</span></h6>
											<p class="msg-info">Successfully shipped your item</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
										ago</span></h6>
											<p class="msg-info">24 new authors joined last week</p>
										</div>
									</div>
								</a>
								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
										</div>
										<div class="flex-grow-1">
											<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
										ago</span></h6>
											<p class="msg-info">45% less alerts last 4 weeks</p>
										</div>
									</div>
								</a>
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">View All Notifications</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
							<i class='bx bx-comment'></i>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Messages</p>
									<p class="msg-header-clear ms-auto">Marks all as read</p>
								</div>
							</a>
							<div class="header-message-list">
								<?php
									$q="SELECT * FROM `contact_detail`";
									$result = $con->query($q);
					                while($data = mysqli_fetch_array($result))
					                {
					            ?>

								<a class="dropdown-item" href="javascript:;">
									<div class="d-flex align-items-center">
										<div class="flex-grow-1">
											<h6 class="msg-name"><?php echo $data['name']; ?><span class="msg-time float-end"><?php echo $data['date']; ?></span></h6>
							    
											<p class="msg-info"><?php echo $data['email']; ?></p>
											<p class="msg-info"><?php echo $data['message']; ?></p>
										</div>
									</div>
								<?php     	
									}
								?>
								</a>
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">View All Messages</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="user-box dropdown border-light-2">
				<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="assets/images/Screenshot_2019_0919_212255-01.jpeg" class="user-img" alt="user avatar">
					<div class="user-info ps-3">
						<p class="user-name mb-0 text-white">Savan Tilala</p>
						<p class="designattion mb-0">Web Designer</p>
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
					</li>
					<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
					</li>
					<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
					</li>
					<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
					</li>
					<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
					</li>
					<li>
						<div class="dropdown-divider mb-0"></div>
					</li>
					<li><a class="dropdown-item" href="logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--end header -->