<?php include('../include/config.php'); 
if ($_POST['city_id']) {
	 $q="SELECT market_name,id FROM marketing_yard WHERE city_id='".$_POST['city_id']."'";
	$result = $con->query($q);
	
	$options = " <label  class='form-label'>Select marketing-yard</label> <select name='market_name' id='market_name' class='form-control'><option value=''>--select--</option>";

	while($data = mysqli_fetch_array($result))
	{

		$options.='<option value="'.$data['id'].'">'.$data['market_name'].'</option>';

	}

	$options.='</select>';

	echo json_encode(array(
		'status' => 'true',
		'message'=> 'marketing-yard successfullyfound',
		'markets' => $options
	));

	}
	else{
		echo json_encode(array(
			'status'=>'fail',
			'message'=>'marketing-yard not found',
		));
	}

?>