<?php include_once './includes/header.php';
     require_once './includes/loginChecker.inc.php'; 
     checkLogin();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Log</title>
    <link rel="stylesheet" href="activityLog.css">
</head>
<body>

        <div class="actTableContainer">
            <div class="topContainer">
                <div>
                    <h1 class="actH1"> Borrowed Items Log</h1> 
                </div>
                <div class="topButton">
                    <button type="submit"> Export Table </button>
                </div>
            </div>
            <div class="borrowedTable">
                <table class="bItemsTable">
                    <thead>
                        <tr>
                            <th> Actions </th>
                            <th> Teacher Name </th>
                            <th> Section & Course </th>
                            <th> Items to be Borrowed </th>
                            <th> Item Quantity </th>
                            <th> Date of Borrow </th>
                            <th> Time of Start </th>
                            <th> Time of End </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                        </tr>    
                    </tbody>
                </table>

                <div class="bottomButton">
                    <button class="btn-open-popup" onclick="toggleBorrow()">Borrow Form</button>
                    <button class="btn-open-popup" onclick="toggleReturn()">Return Form</button>
                </div>
            </div>
        </div>    
    <script src="js/borrow.js"></script>
<?php include_once './includes/footer.php'; ?>

</body>
</html>