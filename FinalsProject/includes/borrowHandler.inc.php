<?php
    require_once 'tableModel.inc.php';
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["fname"] . " ". $_POST["mname"] . " ". $_POST["lname"];
            $class = $_POST["section"] . " ". $_POST["course"];
            $items = $_POST["items"];
            $borrowedQuantity = $_POST["quantity"];
            $dateofBorrow = $_POST["Date"];
            $start = $_POST["start"]; 
            $end = $_POST["end"];
            $status = $_POST["status"];

    }
?>