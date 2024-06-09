<?php 

declare(strict_types=1);

function checkErrors() {

    if (isset($_SESSION["errors_login"])) {

        $errors = $_SESSION["errors_login"];
        $errorOutput = false;

        foreach($errors as $error) {
            if (!$errorOutput) {
            echo '<p class="output">' .htmlspecialchars($error) . '</p>';
            $errorOutput = true;    
        }
    }
        unset($_SESSION["errors_login"]);
    }
    else if (isset($_GET['login']) && $_GET['login'] === "success") {
            header("Location: ./dashboard.php");
            exit();
    }
}