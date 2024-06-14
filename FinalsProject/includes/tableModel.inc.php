<?php

declare(strict_types=1);

function insertData(object $pdo, string $category, string $brand, int $quantity, string $date):bool {
    
    $query = "INSERT INTO inventory(Category, Brand, ItemQuantity, DateAdded)
            VALUES ( ?, ?, ?, ?);";

    $stmt = $pdo->prepare($query);
    return $stmt ->execute([$category, $brand, $quantity, $date]);
}

function getData(object $pdo) {
    $query = "SELECT * FROM inventory";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function deleteItems(object $pdo, $id) {

    $query ="DELETE FROM inventory WHERE Item_Id =$id;";
    $stmt = $pdo->prepare($query);
    $stmt -> execute();
}
function dataArchive(object $pdo, $id) {
    $query = "INSERT INTO archive SELECT * FROM inventory WHERE Item_Id = $id";
    $stmt = $pdo->prepare($query);

    return $stmt->execute();
}
function getArchive(object $pdo) {

    $query = "SELECT * FROM archive";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
