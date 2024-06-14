<?php

declare(strict_types=1);

function getUser(object $pdo, string $username) {

    $query = "SELECT * FROM users WHERE UserName = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function loginHistory(object $pdo,int $id, string $dateTime) {
    $query = "INSERT INTO loginhistory(User_Id, loginTime) VALUES (?,?);";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$id,$dateTime]);
}
function getHistory(object $pdo) {
    $query = "SELECT u.User_Id, u.UserName, l.loginTime FROM loginhistory AS l JOIN users AS u ON l.User_Id= u.User_Id;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function changePassword(object $pdo, $pwd) {
    
    $query = "UPDATE users SET PassWord=':pwd' WHERE User_Id= 1;";
    $stmt = $pdo->prepare($query);
    
    $option = [
        cost =>12
    ];
    $hashedPassword= password_hash($pwd,PASSWORD_BCRYPT,$options);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->execute();
}