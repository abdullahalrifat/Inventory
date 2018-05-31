<?php

require_once 'core.php';

$sql = "SELECT accounting.id, expencetype.Name, expencetype.Type,Amount,Date 
FROM accounting,expencetype where accounting.Entry=expencetype.id";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) {

    // $row = $result->fetch_array();
    $activeCategories = "";
    $credit=0;
    $debit=0;
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
            echo "<td>";
            echo "";
            echo "</td>";
            $debit+=$row[3];

        } else {
            // deactivate member
            echo "<td>";
            echo "";
            echo "</td>";
            echo "<td>";
            echo "Credit";
            echo "</td>";
            $credit+=$row[3];

        }

        echo "<td>";
        echo $row[3];
        echo "</td>";



        echo "</tr>";

    } // /while

    echo "<tr>";
    echo "<td>";
    echo "Total Sell ";
    echo "</td>";

    echo "<td>";
    echo "Debit";
    echo "</td>";

    echo "<td>";
    echo "";
    echo "</td>";
    $orderSql = "SELECT * FROM orders WHERE order_status = 1";
    $orderQuery = $connect->query($orderSql);
    $countOrder = $orderQuery->num_rows;

    $totalRevenue = 0;
    while ($orderResult = $orderQuery->fetch_assoc()) {
        $totalRevenue += $orderResult['paid'];
    }

    echo "<td>";
    $debit+=$totalRevenue;
    echo $totalRevenue;
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "Due";
    echo "</td>";

    echo "<td>";
    echo "Debit";
    echo "</td>";

    echo "<td>";
    echo "";
    echo "</td>";
    $orderSql = "SELECT * FROM orders WHERE order_status = 1";
    $orderQuery = $connect->query($orderSql);
    $countOrder = $orderQuery->num_rows;

    $totalRevenue = 0;
    while ($orderResult = $orderQuery->fetch_assoc()) {
        $totalRevenue += $orderResult['due'];
    }

    echo "<td>";
    $debit+=$totalRevenue;
    echo $totalRevenue;
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Total Debit";
    echo "</td>";
    echo "<td>";
    echo "";
    echo "</td>";
    echo "<td>";
    echo "";
    echo "</td>";
    echo "<td>";
    echo "$debit";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Total Credit";
    echo "</td>";
    echo "<td>";
    echo "";
    echo "</td>";
    echo "<td>";
    echo "";
    echo "</td>";
    echo "<td>";
    echo $credit;
    echo "</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>";
    echo "Net Income";
    echo "</td>";
    echo "<td>";
    echo "";
    echo "</td>";
    echo "<td>";
    echo "";
    echo "</td>";
    echo "<td>";
    echo $debit-$credit;
    echo "</td>";
    echo "</tr>";
}// if num_rows

$connect->close();

//echo json_encode($output);