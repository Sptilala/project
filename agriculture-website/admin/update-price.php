<?php include('include/header.php'); ?>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item active" aria-current="page">Update form</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
            <div class="col-sm-8">
            	<form method="POST" id="update_price">
            	<?php 	
            	
            	$pageid = (isset($_GET['id'])) ? $_GET['id'] : '';

            	$q = "SELECT * from `market_price` where id =".$pageid."";
						$result = $con->query($q);
						while($entry=mysqli_fetch_array($result))
								{
									$id = $entry['id']; 
									$product=$entry['product_name'];
									$minp=$entry['min_price'];
									$maxp=$entry['max_price'];
								}

								?>
              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Update detail </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-12">
                           <div class="border border-3 p-4 rounded">

							  <div class="mb-3">
								<label for="updateProductTitle" class="form-label"> Name</label>
								<input type="text" value="<?php echo $product; ?>" class="form-control" id="updateProductTitle" name="product_name">
							  </div>

							  <div class="mb-3">
								<label for="updateMinPrice" class="form-label">min-price</label>
								<input type="text" class="form-control"  name="min-price" id="updateMinPrice" value="<?php echo $minp; ?>">
							  </div>
							  
							  <div class="mb-3">
								<label for="updateMaxPrice" class="form-label">max-price</label>
								<input type="text" class="form-control"  name="min-price" id="updateMaxPrice" value="<?php echo $maxp; ?>">
							  </div>

							 <div><input type="hidden" name="pageid" id="pageid" value="<?php echo $pageid; ?>"></div>

                            </div>
						   </div>
								  
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="button" id="updateprice" name="updateprice" class="btn btn-primary">Save Price</button>
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
	</div>
	<!--end wrapper-->
 
        <?php include('include/footer.php'); ?>