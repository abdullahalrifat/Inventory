<?php

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$orderId = $_POST['id'];

if($orderId) {

    $sql = "Delete From expencetype WHERE id='$orderId'";


    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Removed";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while re8move the brand";
    }

    $connect->close();

   // echo json_encode($valid);

} // /if $_POST