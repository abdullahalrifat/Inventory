<?php

require_once 'core.php';

$sql = "SELECT * FROM contact";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {

    // $row = $result->fetch_array();
    $activeCategories = "";

    while($row = $result->fetch_array()) {
        echo "<tr>";

        // active
        if($row[1] == 1) {
            // activate member
            echo "<td>";
            echo "Supplier";
            echo "</td>";

        } else {
            // deactivate member
            echo "<td>";
            echo "Customer";
            echo "</td>";

        }

        echo "<td>";
        echo $row[2];
        echo "</td>";

        echo "<td>";
        echo $row[3];
        echo "</td>";

        echo "<td>";
        echo $row[4];
        echo "</td>";

        echo "<td>";
        echo $row[5];
        echo "</td>";

        echo "<td>";
        echo $row[6];
        echo "</td>";




        echo "<td>";
        echo " <div class=\"btn-group\">";
        echo "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
	    Action <span class=\"caret\"></span>
	  </button>";
        echo "<ul class=\"dropdown-menu\">
	    <li><a type=\"button\" data-toggle=\"modal\" id=\"editCategoriesModalBtn\" data-target=\"#editCategoriesModal\" onclick=\"editContact('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]')\"> <i class=\"glyphicon glyphicon-edit\"></i> Edit</a></li>
	    <li><a type=\"button\" data-toggle=\"modal\" data-target=\"#removeCategoriesModal\" id=\"removeCategoriesModalBtn\" onclick=\"removeContact(this,'$row[0]')\"> <i class=\"glyphicon glyphicon-trash\"></i> Remove</a></li>       
	  </ul>";
        echo "</div>";
        echo "</td>";

        echo "</tr>";

    } // /while

}// if num_rows

$connect->close();

//echo json_encode($output);