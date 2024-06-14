<?php session_start();
    require_once 'includes/history.inc.php';
    ?>
<!DOCTYPE html>
<html>
    <head> 
        <title> Inventory Monitoring System</title>
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/inventory.css">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">
        <link rel="stylesheet" type="text/css" href="css/activityLog.css">
        <link rel="stylesheet" type="text/css" href="css/kitchenLog.css">   
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <script src="js/header.js"></script>
        <script src="https://kit.fontawesome.com/adead640c9.js" crossorigin="anonymous"></script>
    </head>
    <body> 
        <div>
            <div class="header">
                <div class="photoContainer2"><img src="css/photo/stiLogo.png"></div>
                <div class="h2Container"><h2> KITCHEN INVENTORY </h2></div>
            <div class="navContainer">
                    <div class="hyperLink">
                        <nav>
                            <ul class="navList">
                                <li> <a class="navLink"href="dashboard.php" id="dashboard"> Dashboard </a></li>
                                <li> <a class="navLink"href="inventory.php" id="inventory"> Inventory </a></li>
                                <li> <a class="navLink"href="activityLog.php" id="activityLog"> Activity Log</a></li>
                                <li> <a class="navLink"href="kitchenStatus.php" id="kitchenStatus"> Kitchen Status </a></li>
                            </ul>  
                        </nav>
                        </div>
                        <div class="accountDropDown"> 
                            <div class="pictureContainer"> 
                                <img src="./css/photo/user.png" alt="user"loading="lazy" id="profile">
                            </div>
                            <div class="dropDownContainer">
                                <nav>
                                    <?php echo '<p class="username">' .$_SESSION['username']. ' </p>'; ?>
                                    <ul class="dropDownList"> 
                                        <li class="list"> <a href="./history.php"> History</a> </li>
                                        <li class="list"> <a href="#"> Change Login Info </a></li>
                                        <li class="list"> <a href="#"> Requests </li>
                                        <li class="list"> <form action="includes/logout.inc.php">
                                                            <button> Log out </button>
                                                            </form>
                                                        </li>
                                    </ul>
                                </nav>    
                            </div>
                        </div>
            </div>
        </div>
        