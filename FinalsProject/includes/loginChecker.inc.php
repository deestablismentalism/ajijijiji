<?php
function checkLogin() {
    if (!isset($_SESSION["username"]) && !isset($_SESSION["user_id"])) {
        header("Location: ./index.php");
        exit();
    }
}    