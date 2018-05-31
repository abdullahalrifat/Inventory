<?php

require_once 'core.php';

$sql = "SELECT accounting.id, expencetype.Name, expencetype.Type,Amount,Date 
FROM accounting,expencetype where accounting.Entry=expencetype.id";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {

    // $row = $result->fetch_array();
    $activeCategories = "";

    while($row = $result->fetch_array()) {
        echo "<tr>";
        echo "<td>";
        echo $row[1];
        echo "</td>";
        // active
        if($row[2] == 1) {
            // activate member
            echo "<td>";
            echo "Debit";
            echo "</td>";

        } else {
            // deactivate member
            echo "<td>";
            echo "Credit";
            echo "</td>";

        }

        echo "<td>";
        echo $row[3];
        echo "</td>";




        echo "<td>";
        echo " <div class=\"btn-group\">";
        echo "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
	    Action <span class=\"caret\"></span>
	  </button>";
        echo "<ul class=\"dropdown-menu\">
	    <li><a type=\"button\" data-toggle=\"modal\" id=\"editCategoriesModalBtn\" data-target=\"#editCategoriesModal\" onclick=\"editExpenseType('$row[0]','$row[1]','$row[2]','$row[3]')\"> <i class=\"glyphicon glyphicon-edit\"></i> Edit</a></li>
	    <li><a type=\"button\" data-toggle=\"modal\" data-target=\"#removeCategoriesModal\" id=\"removeCategoriesModalBtn\" onclick=\"removeExpenseType($row[0])\"> <i class=\"glyphicon glyphicon-trash\"></i> Remove</a></li>       
	  </ul>";
        echo "</div>";
        echo "</td>";

        echo "</tr>";

    } // /while

}// if num_rows

$connect->close();

//echo json_encode($output);