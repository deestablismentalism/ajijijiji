<?php 
    include_once 'includes/borrowView.inc.php';
    require_once 'includes/loginChecker.inc.php'; 
     checkLogin();
?>

<!DOCTYPE html>

    <html>
    <head>
        <title>Borrow Form</title>
        <link rel="stylesheet" href="css/borrow.css">
        <script src="js/borrowPopUp.js"></script>
        <script src="https://kit.fontawesome.com/adead640c9.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="popUpFormContainer">
        <div class="borrowItemContainer">
        <h2>Borrow Item</h2>
        </div>
        <form class="form-container" action="includes/borrowHandler.inc.php" method="post">
                <label class="form-label" for="studentId"> Student ID </label>
                <input class= "form-input" type="text" name="studentId" id="studentId" required>

                <label class="form-label" for="studentName"> Student Name </label>
                <input class= "form-input" type="text" name="studentName" id="studentName" placeholder="Last Name, First Name M.I."required>

                <label class="form-label" for="coursensec">Course and Section:</label>
                <input class= "form-input" type="text" placeholder="Course/Section" id="coursensec" name="courseAndSection" required>

            <div class="itemsBorrowedContainer"> 
                <label class="form-label" for="itemborrowed" id="labelDrop">Item/s to be borrowed <i class="fa-solid fa-caret-down"></i></label>
            </div>
            <div class = "dropDownItems">
                <ul class="itemsList">
                    <?php displayItems(); ?>
                </ul>
            </div>
            <div id="selectedItems"></div>

            <label class="form-label" for="dateborrowed">Date Borrowed:</label>
            <input class="form-input" type="date" id="dateborrowed" name="dateborrowed" required>

            <label class="form-label" for="start">Time of Start:</label>
            <input class="form-input" type="time" id="start" name="start" required>

            <label class="form-label" for="end">Time of End:</label>
            <input class="form-input" type="time" id="end" name="end" required>

            <label class="form-label" for="status">Status:</label>
            <select name="status" required>
                <option value="Pending">Pending</option>
            </select>

            <button class="btn-submit" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>