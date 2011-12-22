<?php
if(isset($_POST['data'])){
	$data = objectToArray(json_decode(stripslashes($_POST['data'])));
	$data = $data['data'];
	$ans[] = array("bus"=>"235","time"=>1);
	$ans[] = array("bus"=>$data,"time"=>1);
	$result['data'] = $ans;
	echo json_encode($result);
}

function objectToArray($d) {
	if (is_object($d)) {
		// Gets the properties of the given object
		// with get_object_vars function
		$d = get_object_vars($d);
	}

	if (is_array($d)) {
		/*
		* Return array converted to object
		* Using __FUNCTION__ (Magic constant)
		* for recursive call
		*/
		return array_map(__FUNCTION__, $d);
	}
	else {
		// Return array
		return $d;
	}
}
?>