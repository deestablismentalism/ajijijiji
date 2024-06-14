<?php
    require_once 'connection.inc.php';
    require_once 'loginModel.inc.php';
    require_once 'tableModel.inc.php';

    function displayLogin() {
        global $pdo;
        try {
            $history = getHistory($pdo);
        
        foreach($history as $rows) {
            echo '<tr>
                    <td> User: ' .htmlspecialchars($rows["UserName"]). ' logged in @ '
                    .htmlspecialchars($rows["loginTime"]).'</td>
                </tr>';
        }
        }
        catch(PDOException $e) {
            die("Display Failed: " .$e->getMessage());
        }   
    }
    function displayArchive() {
        global $pdo;
        try {
            $archive = getArchive($pdo);

            foreach($archive as $row) {
                echo '<tr>
                        <td><a href="#"> Restore </a> </td>
                        <td>'.htmlspecialchars($row["Category"]).'</td>
                        <td>'.htmlspecialchars($row["Brand"]).'</td>
                        <td>'.htmlspecialchars($row["ItemQuantity"]).'</td>
                        <td>'.htmlspecialchars($row["DateDeleted"]).'</td>
                    </tr>';
            }
        }
        catch(PDOException $e) {
            die("Display Failed: " .$e->getMessage());
        }
    }