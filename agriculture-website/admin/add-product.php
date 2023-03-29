<?php include('include/header.php'); ?>
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item active" aria-current="page">Add name</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
            <div class="col-sm-8">
            	<form method="POST" id="save_product" enctype="multipart/form-data">
              <div class="card">
				  <div class="card-body p-4">
					  <h5 class="card-title">Add name </h5>
					  <hr/>
                       <div class="form-body mt-4">
					    <div class="row">
						   <div class="col-lg-12">
                           <div class="border border-3 p-4 rounded">

							  <div class="mb-3">
								<label for="inputProductTitle" class="form-label"> Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter product name">
							  </div>

              <div class="mb-3">
								<label  class="form-label">Select Category</label>
								<select name='category_type' class="form-control">
                          <?php
																$q = "SELECT * from `category`";
																	$result = $con->query($q);
																while($entry=mysqli_fetch_array($result))
																	{
																	echo "<option "; 
																	if($entry['category_name']){echo " selected=selected";} 
																	echo ">" . $entry['category_name'] . "</option>";
																	}
																echo "</select>";
                          ?>
                   
                       
							</div>

							  <div class="mb-3">
								<label for="inputProductDescription" class="form-label">Description</label>
								<textarea class="form-control" name="discription" id="discription" rows="3"></textarea>
							  </div>
							  <div class="mb-3">
								<label for="image-uploadify" class="form-label">Images</label>
								<input id="image-uploadify" name="image" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
							  </div>
                            </div>
						   </div>  

								  <div class="col-12">
									  <div class="d-grid">
                                         <button type="button" id="add_product" name="add_product" class="btn btn-primary">submit</button>
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

<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>