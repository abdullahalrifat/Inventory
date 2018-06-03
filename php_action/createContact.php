<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

    $type = $_POST['type'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $sql = "INSERT INTO contact (id, type, name, company, mobile, email, address) 
	VALUES (0,'$type', '$name', '$company', '$mobile', '$email', '$address')";
    //echo $sql;
    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Added";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }

    $connect->close();

    //echo json_encode($valid);
    echo '<script type="text/javascript"> window.open("../Contacts.php","_self");</script>';

} // /if $_POST