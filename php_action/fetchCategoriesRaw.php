<?php

require_once 'core.php';

$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {

    // $row = $result->fetch_array();
    $activeCategories = "";

    while($row = $result->fetch_array()) {
        $categoriesId = $row[0];

        $output['data'][] = array(
            'id'=>$row[0],
            'Name'=>$row[1]
        );
    } // /while

}// if num_rows

$connect->close();

echo json_encode($output);