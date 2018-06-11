<?php 	

require_once 'core.php';

$sql = "SELECT product_id, product_name FROM product WHERE status = 1 AND active = 1";
$result = $connect->query($sql);
$output = array('data' => array());
//$data = $result->fetch_all();
if($result->num_rows > 0) {

    // $row = $result->fetch_array();
    $activeCategories = "";

    while($row = $result->fetch_array()) {
        $output['data'][] = array(
            'val1'=>$row[0],
            'val2'=>$row[1]
        );

    } // /while

}// if num_rows
$connect->close();

echo json_encode($output);