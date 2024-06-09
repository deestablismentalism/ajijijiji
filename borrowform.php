<?php 
    include_once 'includes/borrowView.inc.php';
    require_once './includes/loginChecker.inc.php'; 
     checkLogin();
?>

<!DOCTYPE html>

 <html>
<head>
    <title>Borrow Form</title>
</head>
<body>

    <div>
        <form action="includes/borrowHandler.inc.php" method="post">
            
            <label for="fname"><b> Teacher Name:</b></label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="First Name">
            <input type="text" id="mname" name="mname" placeholder="Middle Name">
            <input type="text" id="lname" name="lname" placeholder="Last Name">
            <input type="text" id="sname" name="sname" placeholder="Suffix (Optional)">
            <br>
            <label for="SCourse"><b>Section and Course:</b></label>
            <br>
            <input type="text" id="Sname" name="section" placeholder="Section">
            <input type="text" id="Course" name="course" placeholder="Course">
            <br>
            <label for="items"><b>Items to be Borrow:</b></label>
            <div class="dropdown">
                <select name="items">
                    <?php displayItems() ?>
                </select>
            </div>

            <label for="Itq"><b>Item Quantity:</b></label>
            <br>
            <input type="number" id="Itqa" name="quantity" placeholder="0">
            <br>
            <label for="Date"><b>Date of Borrow:</b></label>
            <br>
            <input type="date" id="DoBr" name="Date">
            <br>
            <label for="start"><b>Time of Start:</b></label>
            <br>
            <input type="time" id="ToSt" name="start" placeholder="HH:mm">
            <br>
            <label for="end"><b>Time of End:</b></label>
            <br>
            <input type="time" id="ToE" name="end" placeholder="HH:mm">
            <br>
            <div class="dropdown">
                <label for="status"> Status </label>
                <select name = "status">
                    <Option>Done</Option>
                    <Option>Not Done</Option>
            </select> 
            </div>
            <button> Submit </button>
        </form>
    </div>


</body>

 </html>