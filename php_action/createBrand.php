<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['brandName'];
    $brandCategory = $_POST['brandCatagory'];
    $brandStatus = $_POST['brandStatus'];

	$sql = "INSERT INTO brands (brand_name, categories_id, brand_active, brand_status) VALUES ('$brandName', '$brandCategory', '$brandStatus', 1)";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST