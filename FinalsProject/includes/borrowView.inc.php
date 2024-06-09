<?php
session_start();
    require_once 'connection.inc.php';
    require_once 'tableModel.inc.php';
 function displayItems() {
    global $pdo;

    try {
        $items = getData($pdo);

        foreach($items as $item) {
            echo '<input type="checkbox" id="item'.$item["Item_Id"].'">
                 <label for="item'.$item["Item_Id"].'">'.htmlspecialchars($item["Category"]).'('.htmlspecialchars($item["Brand"]).')';
        }
    }
    catch (PDOException $e) {
        die("Query Failed: " .$e->getMessage());
    }
}