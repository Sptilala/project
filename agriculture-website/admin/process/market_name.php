<?php 
echo json_encode(array(
		'status' => 'true',
		'message'=> 'yard was successfullyfound',
	));

echo json_encode(array(
			'status'=>'fail',
			'message'=>'yard not found',
		));
?>