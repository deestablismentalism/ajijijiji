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

    <h2>Borrow Item</h2>
    <form class="form-container" action="includes/borrowHandler.inc.php" method="post">
        <label class="form-label" for="name">Teacher Name:</label>
        <input class="form-input" type="text" placeholder="Full Name" id="name" name="name" required>

        <label class="form-label" for="coursensec">Course and Section:</label>
        <input class="form-input" type="text" placeholder="Course and Section" id="coursensec" name="coursensec" required>

        <label class="form-label" for="itemborrowed">Item/s to be borrowed:</label>
        <input class="form-input" type="text" id="itemborrowed" name="itemborrowed" required>

        <label class="form-label" for="itemqty">Quantity:</label>
        <input class="form-input" type="number" id="itemqty" name="itemqty" placeholder="0" required>

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
    <button class="btn-close-popup" onclick="togglePopup()">Close</button>

</body>

 </html>
