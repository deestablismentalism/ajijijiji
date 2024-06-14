<?php include_once './includes/header.php'; 
require_once './includes/loginChecker.inc.php'; 
checkLogin();
?>

<div class ="dashboard"> 
            
            <div class="tableContainer">
                <div>
                    <p> Class Information </p><br>
                    <table class="activityTable">
                        <thead>
                        <tr>
                            <th> Teacher Name </th>
                            <th> Items Borrowed </th>
                            <th> Item Quantity </th>
                            <th> Status </th>
                        </tr> 
                        </thead>
                    </table>  
                </div>
                <div class="table2Container">
                    <p> Schedule </p><br>
                    <table class="recentlyTable">
                        <thead>
                        <tr>   
                            <th> Date of Borrow </th>
                            <th> Time of Start </th>
                            <th> Time of End </th>
                            <th> Status </th>
                        </tr>
                        </thead>                    
                    </table>
                </div>
            </div> 
</div>   
            
<?php include_once './includes/footer.php'; ?>   