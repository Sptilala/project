<?php include('../include/config.php'); 
if ($_POST['state_id']) {
	 $q="SELECT city_name,id FROM city WHERE state_id='".$_POST['state_id']."'";
	$result = $con->query($q);

	$options = " <label  class='form-label'>Select city</label> <select name='city_name' id='city_name' class='form-control'><option>--select--</option>";
	while($data = mysqli_fetch_array($result))
	{

		$options.='<option value="'.$data['id'].'">'.$data['city_name'].'</option>';

	}

	$options.='</select>';


	echo json_encode(array(
		'status' => 'true',
		'message'=> 'cityname successfullyfound',
		'cities' => $options
	));

	}
	else{
		echo json_encode(array(
			'status'=>'fail',
			'message'=>'cityname not found',
		));	
	}

?>