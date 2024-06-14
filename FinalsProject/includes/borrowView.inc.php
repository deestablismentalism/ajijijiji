<?php
session_start();
    require_once 'connection.inc.php';
    require_once 'tableModel.inc.php';
 function displayItems() {
    global $pdo;

    try {
        $items = getData($pdo);
        foreach($items as $item) {
            echo '<li class="allItems"> 
            <input type="checkbox" class="items" id="'.$item["Item_Id"].'" value="'.$item["Item_Id"].'" name="item">
            <label class="selectedLabel"for="'.$item["Item_Id"].'">'.htmlspecialchars($item["Category"]).'('.htmlspecialchars($item["Brand"]).')</label>
            <input type="number" min="1" max="'.$item["ItemQuantity"].'" placeholder ="'.$item["ItemQuantity"].'" name="quantity"> 
            </li>';
        }
    }
    catch (PDOException $e) {
        die("Query Failed: " .$e->getMessage());
    }
}