<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

    $entryName = $_POST['categoriesStatus'];
    $entryAmount = $_POST['entryAmount'];
    $entryDate = $_POST['startDate'];

    $sql = "INSERT INTO accounting (id, Entry, Amount, Date) 
	VALUES (0,'$entryName', '$entryAmount', '$entryDate')";

    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Added";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }

    $connect->close();

    //echo json_encode($valid);
    echo '<script type="text/javascript"> window.open("../Entry.php","_self");</script>';

} // /if $_POST