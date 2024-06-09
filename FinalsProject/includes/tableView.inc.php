<?php 

declare(strict_types=1);

require_once 'connection.inc.php';
require_once 'tableModel.inc.php';
function displayTable() {
    global $pdo;
    try {
            $result = getData($pdo);
            foreach($result as $row) {
                echo '<tr class="unedited"> <td> <a href="inventory.php?id='.$row["Item_Id"].'"class="dltBtn"> <i class="fa-solid fa-trash"></i> </button>
                                 <a href="inventory.php?edit='.$row["Item_Id"].'" class="editBtn"> <i class="fa-solid fa-pen"></i></button>  
                            </td> 
                      <td>'.htmlspecialchars($row["Category"]). '</td>
                      <td>' .htmlspecialchars($row["Brand"]). '</td>
                      <td>' .htmlspecialchars((string)$row["ItemQuantity"], ENT_QUOTES, 'UTF-8'). '</td>
                      <td>' .htmlspecialchars($row["DateAdded"]). '</td>
                      </tr>';
            }
    }
    catch (PDOException $e) {
        die("Query Failed: " .e->getMessage());
    }
}
function checkInput() {
    
    if (isset($_GET['query']) && $_GET['query'] === "failed") {
        if (isset($_SESSION["errors"])) {

        $errors = $_SESSION["errors"];
        $errorOutput = false;
        foreach($errors as $error) {

            if (!$errorOutput) {
            echo '<p style="color:red;">'.$error.'</p>';
            $errorOutput = true;
            }
        }
        unset($_SESSION["errors"]);
        }
    }
    else if (isset($_GET['query']) && $_GET['query'] === "success") {
        echo '<p style="color:red;"> Data Added Succesfully </p>';
        header("Location: ./inventory.php");
        exit();
    }
}
function Archive() {
    global $pdo;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteItems($pdo,$id);
        header("Location: ./inventory.php");
        exit();
    }
}
function Update() {
    global $pdo;

    if(isset($_GET['edit'])) {
        $edit = $_GET['edit'];
        
        $result = getData($pdo);
            echo ' <tr class="edited"> <td><a href="inventory.php?edit=save">Save</a>
                    <a href="inventory.php?edit=cancel">Cancel</a></td>
                    <td><input type="text"name="category"></td>
                    <td><input type="text"name="brand"></td>
                    <td><input type="number"name="quantity"></td>
                    <td> Not Editable</td>
                    </td> </tr>';
    }    
}