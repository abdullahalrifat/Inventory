<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {

    $entryName = $_POST['Name'];
    $entryType = $_POST['Type'];
    $entryId = $_POST['id'];
    echo $entryName;

    $sql = "UPDATE expencetype SET Name = '$entryName', Type = '$entryType' WHERE id = '$entryId'";

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