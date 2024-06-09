<?php include_once './includes/header.php';
     require_once './includes/loginChecker.inc.php'; 
     checkLogin();
?>
    <div>
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
                    <a href="returnform.php"> Return Form </a>
                    <a href="borrowform.php"> Borrow Form </a>
                </div>
            </div>
        </div>    
    </div>

<?php include_once './includes/footer.php'; ?>