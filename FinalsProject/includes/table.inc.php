<?php 
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $category = $_POST["category"];
        $brand = $_POST["brand"];
        $quantity = $_POST["quantity"];
        $date = date('Y-m-d');

        try {
            require_once 'connection.inc.php';
            require_once 'tableModel.inc.php';
            require_once 'tableControl.inc.php';

            $errors=[];
            
            if (isFieldEmpty($category, $brand, $quantity)) {
                $errors["Empty"] = "Please fill in all fields";
            }
            if (isQuantityNumber($quantity)) {
                $errors["Quantity"] = "Quantity must be a number";
            }  
            if (empty($errors)) {
                $insert = insertData($pdo, $category,$brand,$quantity, $date);
                if (!$insert) {
                    $errors["data"] = "Query Failed";
                    $_SESSION["errors"] = $errors;
                    header("Location: ../inventory.php?query=failed");
                    exit();
                }
            }
            else {
                $_SESSION["errors"] = $errors;
                header("Location: ../inventory.php?query=failed");
                exit();
            }
            $result = getData($pdo);
            $_SESSION["item"] = $result["Category"];
            $_SESSION["brand"] = $result["Brand"];

            header("Location: ../inventory.php?query=success");
            exit();

            $pdo = null;
            $stmt = null;
            die();
        }
        catch(PDOException $e) {
            die("Query Failed: " .$e->getMessage());
        }
    }
    else {
        header("Location: ../inventory.php");
        die();
    }