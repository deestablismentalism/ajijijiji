<?php

declare(strict_types=1);

    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST["studentId"];
            $name = $_POST["studentName"];
            $class = $_POST["courseAndSection"];
            $dateofBorrow = $_POST["dateborrowed"];
            $start = $_POST["start"]; 
            $end = $_POST["end"];
            $dateReturned = "N/A";

            try {
                require_once 'connection.inc.php';
                require_once 'borrowModel.inc.php';
                require_once 'borrowControl.inc.php';

                if (isset($_POST["item"]) && isset($_POST["quantity"])) {
                    $itemId= $_POST["item"];
                    $borrowed = $_POST["quantity"];

                    foreach($itemId as $items) {
                        $borrowedQuantity = $borrowed[$items];
                        
                        insertBorrowData($pdo, $itemId, $id, $class, 
                            $borrowedQuantity, $start, $end,$dateofBorrow, $dateReturned);        
                    }

                    if(isBorrowerSaved($pdo, $id)) {
                        header("Location: ../activityLog.php");
                    }
                    else {
                        insertBorrower($pdo, $id, $name, $class);
                        header("Location: ../activityLog.php");
                        exit();
                    }
                }

                $pdo = null;
                $stmt = null;
                die();
            }
            catch(PDOException $e) {
                die("Query Failed: " .$e->getMessage());
            }

    }
