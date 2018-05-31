<?php

require_once 'core.php';
//echo '<script type="text/javascript"> alert("ki");</script>';
$sql = "SELECT id, Name, Type FROM expencetype";
$result = $connect->query($sql);

$output = array('data' => array());
$jsonFood = array();
if($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        array_push($jsonFood,
            array(

                'id'=>$row[0],
                'Name'=> $row[1]

            ));

    } // /while

}
// if num_rows

$connect->close();

echo json_encode(array("expense"=>$jsonFood));