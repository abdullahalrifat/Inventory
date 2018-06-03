<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

    $id = $_POST['id'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];



    $sql = "UPDATE contact SET type = '$type', name = '$name', company='$company', mobile='$mobile',
   email='$email', address='$address' WHERE id = '$id'";

    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Updated";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while updating the categories";
    }

    $connect->close();

    echo json_encode($valid);

} // /if $_POST