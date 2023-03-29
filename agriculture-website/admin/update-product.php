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
            	<form method="POST" id="update_product" enctype="multipart/form-data">
            	<?php 	
            	
            	$pageid = (isset($_GET['id'])) ? $_GET['id'] : '';

            	$q = "SELECT * from `product` where id =".$pageid."";
						$result = $con->query($q);
						while($entry=mysqli_fetch_array($result))
								{
									$id = $entry['id']; 
									$cat =$entry['category_type'];
									$prod=$entry['product_name'];
									$disc=$entry['discription'];
									$img=@$entry['image'];
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
								<label for="inputProductTitle" class="form-label"> Name</label>
								<input type="text" value="<?php echo $prod; ?>" class="form-control" name="product_name"  placeholder="Enter product name">
							  </div>

              <div class="mb-3">
								<label  class="form-label">Select Category</label>
								<select name='category_type' value="<?php echo $pageid; ?>">

				                <?php
									$q = "SELECT * from `category`";
										$result = $con->query($q);
									while($entry=mysqli_fetch_array($result))
										{
										echo "<option"; 
										if($entry['category_name']){echo " selected=selected";} 
										echo ">" . $entry['category_name'] . "</option>";
										}
									echo "</select>";
                                ?>
										<input type="hidden" name="pageid" id="pageid" value="<?php echo $pageid; ?>">
                   
                       
				</div>

							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control"  name="discription"  rows="3" ><?php echo $disc; ?></textarea>
							  </div>
							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Images</label>
								<img src="<?php echo APPURL.'/assets/product_image/'.$img; ?>" style = "max-width: 
								400px;" >
								<input  id="image-uploadify" name="image"   type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>

							  </div>
                            </div>
						   </div>
								  
								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="button" id="updatep" name="updatep" class="btn btn-primary">Save Product</button>
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

		
	
</body>

