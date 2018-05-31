<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

    $Entry = $_POST['Entry'];
    $Amount = $_POST['Amount'];
    $Date = $_POST['Date'];
    $id = $_POST['id'];
    //echo $entryName;

    $sql = "UPDATE accounting SET Entry = '$Entry', Amount = '$Amount', Date='$Date' WHERE id = '$id'";

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