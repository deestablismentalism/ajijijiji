<?php

    $servername = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'inventory';

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        die("Connection Failed: " . $e->getMessage());
    }
    