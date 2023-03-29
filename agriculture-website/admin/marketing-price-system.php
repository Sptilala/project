<?php include('include/header.php'); ?>
<!--start page wrapper -->
<div class="page-wrapper">
<div class="page-content">
<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item active" aria-current="page">Market daily data entry</li>
					</ol>
				</nav>
			</div>
		</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-sm-6">
	<form method="POST">
			<div class="card">
			<div class="card-body p-4">
			  <h5 class="card-title">Select the marketing-yard</h5>
			  <div class="form-body mt-4">
			    <div class="row">
				    <div class="col-lg-12">
			                <div class="border border-3 p-4 rounded">

										    <div class="mb-3">
													<label  class="form-label">Select State</label>
													<select name='state_name' id="state_name" class="form-control"><option>--select--</option>
										              <?php
														$q = "SELECT * from `state_table`";
															$result = $con->query($q);
														while($entry=mysqli_fetch_array($result))
															{ ?>
																<option value="<?php echo $entry['id']; ?>"><?php echo$entry['state']; ?></option>
															<?php } ?>
										              ?>   
										              </select>    
											</div>

											<div class="mb-3" name='city_name' id='city_name'>
												<div class="citylist">
									            </div>      
											</div>

											<div class="mb-3" name="markets_name" id="markets_name">
												<div class="marketlist">
									            </div>      
											</div>

			                </div>
				    </div>  

							  <div class="col-12">
								  <div class="d-grid">
				                             <button type="button" id="market" name="market" class="btn btn-primary" disabled="disabled">submit</button>
								  </div>
							  </div>
				</div> 
			  </div>
			</div>
			</div>
   <!--end row-->	
 	</form>
	</div>
	<!-- For market price table -->

	<div  class="col-sm-6 stockContainer d-none">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>product name</th>
                            <th>min-price</th>                                                                          
                            <th>max-price</th>
                        </tr>
                    </thead>
                    <tbody class="yard_record">	                             
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>product name</th>
                            <th>min-price</th>                                                                          
                            <th>max-price</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

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
