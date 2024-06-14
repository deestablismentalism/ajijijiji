<?php include_once './includes/header.php'; 
    require_once './includes/loginChecker.inc.php'; 
    checkLogin();
?>
    <div>
        <div>
            <div class="kitFormContainer">
                <form>
                    <label for="Equipment"> Equipment*</label>
                    <input type="text" name="Equipment" id="Eqmt">

                    <label for="Status"> Status*</label>
                    <input type="text" name="Status" id="Statu">
                    <button type="submit"> Add Item </button>
                </form>
            </div>
        <div class="kitTableContainer">
            <table class="kitTableItems">
                <thead>
                    <tr>
                        <th> Equipment </th>
                        <th> Status</th>
                    </tr>
                </thead>    
                    <tr>
                    </tr>
            </table>
        </div>
        </div>
    </div>
<?php include_once './includes/footer.php'; ?>