<?php 
    session_start();
    require_once './includes/loginChecker.inc.php'; 
    checkLogin();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Return Form</title>
</head>
<body>
    <button class="btn-close-popup" onclick="togglePopup()"><i class="fa-solid fa-xmark"></i></button>
    <div class="returnItemContainer">
        <h2>Return Item</h2>
    </div>
    <form class="form-container" action="includes/returnHandler.inc.php" method="post">
        <label class="form-label" for="name">Teacher Name:</label>
        <input class="form-input" type="text" placeholder="Full Name" id="name" name="name" required>

        <label class="form-label" for="coursensec">Course and Section:</label>
        <input class="form-input" type="text" placeholder="Course and Section" id="coursensec" name="coursensec" required>

        <label class="form-label" for="itemreturned">Item/s to be returned:</label>
        <input class="form-input" type="text" id="itemreturned" name="itemreturned" required>

        <label class="form-label" for="itemqty">Quantity:</label>
        <input class="form-input" type="number" id="itemqty" name="itemqty" placeholder="0" required>

        <label class="form-label" for="datereturned">Date Returned:</label>
        <input class="form-input" type="date" id="datereturned" name="datereturned" required>

        <label class="form-label" for="status">Status:</label>
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="Replaceable">Replaceable</option>
            <option value="Returned">Returned</option>
        </select>

        <button class="btn-submit" type="submit">Submit</button>
    </form>
</body>
</html>