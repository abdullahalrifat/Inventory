<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

    $entryName = $_POST['entryName'];
    $entryType = $_POST['entryType'];

    $sql = "INSERT INTO expencetype (id, Name, Type) 
	VALUES (0,'$entryName', '$entryType')";

    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Added";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }

    $connect->close();

    //echo json_encode($valid);
    echo '<script type="text/javascript"> window.open("../Accounting.php","_self");</script>';

} // /if $_POST