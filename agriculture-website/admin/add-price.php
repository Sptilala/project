<?php include('include/header.php'); ?>
<!--start page wrapper -->
<div class="page-wrapper">
<div class="page-content">

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
<div class="breadcrumb-title pe-3"></div>
<div class="ps-3">
<nav aria-label="breadcrumb">
	<ol class="breadcrumb mb-0 p-0">
		<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Add Price</li>
	</ol>
</nav>
</div>
<div class="ms-auto">
<div class="btn-group">
	<button type="button" class="btn btn-primary">Settings</button>
	<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
		<a class="dropdown-item" href="javascript:;">Another action</a>
		<a class="dropdown-item" href="javascript:;">Something else here</a>
		<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
	</div>
</div>
</div>
</div>
<!--end breadcrumb-->
<div class="col-sm-6">
<form method="POST" id="input_price">
<div class="card">
  <div class="card-body p-4">
	  <h5 class="card-title">Add price</h5>
	  <hr/>
       <div class="form-body mt-4">
	    	<div class="row">
		   <div class="col-lg-12">
           <div class="border border-3 p-4 rounded">
			<div class="mb-3">
			<label  class="form-label">Select market-yard</label>
			<select name='market_name' id="market_name"  class="form-control"><option>--select--</option>
			<?php
			
			$q = "SELECT * from `marketing_yard` ";
			$result = $con->query($q);
			while($entry=mysqli_fetch_array($result))
			{ ?>
			<option value="<?php echo $entry['id']; ?>"><?php echo $entry['market_name']; ?></option>
			<?php } ?>
			?>   
			</select>  

			</div>

			<div class="mb-3">
				<label for="inputProductTitle"  class="form-label" >Product Name</label>
				<input type="text" class="form-control" id="inputProductTitle" placeholder="Enter category title">
			  </div>
			  <div class="mb-3">
				<label for="inputMinPrice" class="form-label" >Min-Price</label>
			<input type="text" class="form-control" id="inputMinPrice" placeholder="Enter min-price">
			  </div>
			   <div class="mb-3">
				<label for="inputMaxPrice"  class="form-label" >Max-Price</label>
			    <input type="text" class="form-control" id="inputMaxPrice" name="inputMaxPrice" placeholder="Enter max-price">
			  </div>
            </div>
		   </div>
				  <div class="col-12">
					  <div class="d-grid">
                        <button type="button" id="save_price" name="save_price" class="btn btn-primary">Save Price</button>
					  </div>
				  </div>
			  </div> 
		  </div>
		  </div>
	   </div>
	<!--end row-->
	</div>
  </div>
</div>
</form>
</div>
</div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

<?php include('include/footer.php'); ?>
