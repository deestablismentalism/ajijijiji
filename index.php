<?php
    session_start();
    require_once 'includes/loginView.inc.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Inventory Management System</title>
        <link rel = "stylesheet" type = "text/css" href = "css/login.css">
        <link rel="preload" href="css/photo/backGround.png" as="image">
        <script defer src="js/loginPage.js"></script>
    </head>

    <body class="main">
        <div class = "pageContainer">
            <div class = "headerContainer">
                <h1> INVENTORY MONITORING SYSTEM </h1>
            </div>
                <div class = "formContainer">
                    <div class="formHeader">
                        <img src="css/photo/stiLogo.png" width="200px" height="100px">
                        <h1> Kitchen Inventory </h1>
                        <span>
                        <?php 
                            checkErrors();
                        ?>
                        </span>
                    </div>    
                    <form action="includes/login.inc.php"method="post" class="loginForm">
                        <div class = "formBody">
                            <label for = "username"> Username</label> <br>
                            <input type="text" id="username" name="userName" placeholder="Username"/> <br>
                            <label for = "password"> Password</label> <br>
                            <input type="password" id="password" name="passWord" placeholder="Password"/> <br>
                            <div class = "showPass">
                                <input type="checkbox" id = "show">
                                <label for = "password" > Show Password? </label>
                            </div>
                        </div>
                    <div class = "buttonContainer">
                        <button type="submit" id="login"> Login </button>
                    </div>        
                </div>    
            </form>   
        </div>
    </body>
</html>