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
        <div>
            <form>
                <label for="QuanD"><b>Quantity Damaged:</b></label>
                <label for="QuanR"><b>Quantity Returned:</b></label>

                <br>
                <input type="text" id="QuanD" name="Quantity" placeholder="0">
                <input type="text" id="QuanR" name="Quantit" placeholder="0">


            </form>
        </div>
    </body>
</html>