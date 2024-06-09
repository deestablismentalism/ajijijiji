<?php

declare(strict_types=1);

function isInputEmpty(string $username, string $password) {
    if (empty($username) || empty($password)) {
        return true;
    }
    else {
        return false;
    }
}
function isUsernameWrong(bool|array $result) {
    if (!$result) {
        return true;
    }
    else {
        return false;
    }
}
function isPwdWrong(string $password, string $hashedPassword) {
    
    if (!password_verify($password, $hashedPassword)) {
        return true;
    }
    else {
        return false;
    }
}