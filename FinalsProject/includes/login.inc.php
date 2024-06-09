<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $username = $_POST["userName"];
        $password = $_POST["passWord"];
        $dateTime = date('Y-m-d H:i:s');

        try {
            require_once 'connection.inc.php';
            require_once 'loginModel.inc.php';
            require_once 'loginControl.inc.php';

            $errors = [];
            
            if (isInputEmpty($username, $password)) {
                $errors["empty"] = "Fill all the Fields!";
            }

            $result = getUser($pdo, $username);

            if (isUsernameWrong($result)) {
                $errors["Incorrect"] = "Incorrect Username";
            }
            if (!isUsernameWrong($result) && isPwdWrong($password, $result["PassWord"])) {
                $errors["Incorrect"] = "Incorrect Password";
            }
            if ($errors) {
                $_SESSION["errors_login"] = $errors;
                header("Location: ../index.php");
                die();
            }

            $_SESSION["user_id"] = $result["User_Id"];
            $_SESSION["username"] = $result["UserName"];
            $id = $result["User_Id"];
            
            header("Location: ../index.php?login=success");
            loginHistory($id, $dateTime);
            exit();

             $pdo = null;
             $stmt = null;
            die();
        }
        catch(PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }    
    }
    else {
        header("Location: ../index.php");
        die();
    }
