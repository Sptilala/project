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
            	<form method="POST" id="update_news" enctype="multipart/form-data">
            	<?php 	
            	
            	$pageid = (isset($_GET['id'])) ? $_GET['id'] : '';

            	$q = "SELECT * from `daily_news` where id =".$pageid."";
						$result = $con->query($q);
						while($entry=mysqli_fetch_array($result))
								{
									$id = $entry['id']; 
									$product_name=$entry['product_name'];
									$news=$entry['news'];
									$img=@$entry['image'];
								}

								?>
              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Update News </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-12">
                           <div class="border border-3 p-4 rounded">

							  <div class="mb-3">
								<label for="inputProductTitle" class="form-label"> Name</label>
								<input type="text" value="<?php echo $product_name; ?>" class="form-control" name="product_name" id="product_name"  placeholder="Enter product name">
							  </div>

							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">News</label>
								<textarea class="form-control"  name="news" id="news" rows="3" ><?php echo $news; ?></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Images</label>
								<img src="<?php echo APPURL.'/assets/product_image/'.$img; ?>" style = "max-width: 
								400px;" >
								<input  id="image-uploadify" name="image"   type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
								<input type="hidden" name="pageid" id="pageid" value="<?php echo $pageid; ?>">
							  </div>
                            </div>
						   </div>
								  
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="button" id="updaten" name="updaten" class="btn btn-primary">Save Product</button>
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