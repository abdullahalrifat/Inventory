<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
//echo '<script type="text/javascript">alert("beore post");</script>';
if($_POST) {
    //echo '<script type="text/javascript">alert("after post");</script>';
	$productName 		= $_POST['productName'];

  // $productImage 	= $_POST['productImage'];
  $quantity 			= $_POST['quantity'];
  $purchaseRate	= $_POST['purchaseRate'];
  $sellingRate	= $_POST['sellingRate'];

  $brandName 			= $_POST['brandName'];
  $categoryName 	= $_POST['categoryName'];
  $productStatus 	= $_POST['productStatus'];

	$type = explode('.', $_FILES['productImage']['name']);
	$type = $type[count($type)-1];		
	$url = '../assests/images/stock/'.uniqid(rand()).'.'.$type;
	//echo $productName." ".$quantity." ".$purchaseRate." ".$sellingRate." ".$brandName." ".$categoryName." ".$productStatus
       // ." ".$type." ".$url;
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {

		if(is_uploaded_file($_FILES['productImage']['tmp_name'])) {

			if(move_uploaded_file($_FILES['productImage']['tmp_name'], $url)) {

                $sql = "INSERT INTO product (product_id, product_name, product_image, brand_id, categories_id, quantity, purchaseRate, sellingRate, active, status) 
VALUES (0, '$productName', '$url', '$brandName', '$categoryName', '$quantity', '$purchaseRate', '$sellingRate', '$productStatus', 1)";
			    //echo $sql;
				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Added";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error while adding the members";
				}

			}	else {
				return false;
			}	// /else	
		} // if
	} // if in_array 		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST