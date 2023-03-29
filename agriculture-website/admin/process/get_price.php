<?php  include('../include/config.php');
if ($_POST['yard_id']) {
	 $q = "SELECT * FROM `market_price` WHERE yard_id='".$_POST['yard_id']."'";
	$result = $con->query($q);
   $html_table="";
	while($data = mysqli_fetch_array($result))
	{
		$html_table.='<tr><td>'.$data['id'].'</td>';

	    $html_table.='<td>'.$data['product_name'].'</td>';

	    $html_table.='<td>'.$data['min_price'].'</td>';
	    $html_table.='<td>'.$data['max_price'].'</td></tr>';
	}
	echo json_encode(array(
		'status' => 'true',
		'message'=> 'data was successfully found',
		'markets'=>$html_table,
	));

	}
	else{
		echo json_encode(array(
			'status'=>'fail',
			'message'=>'data was no found',
		));	
	}

?>