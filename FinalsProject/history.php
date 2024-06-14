<?php 
    session_start();
    include_once './includes/history.inc.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>History</title>
        <link rel="stylesheet" type="text/css" href="css/history.css">
    </head>
<body>
    <h1> History </h1>
    <div class="historyContainer">
        <div>
            <table class="loginHistory"> 
                <thead>
                    <tr>
                        <th>Login History</th>
                    </tr>
                </thead>
                <tbody>
                    <?php displayLogin(); ?>
                </tbody>
            </table>
        </div>   
        <div>
            <table class="deleteArchive">
                <thead>
                    <tr>
                        <th> Delete Archive</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Actions</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Item Quantity</th>
                        <th>Date Deleted</th>
                    <?php displayArchive(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>