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
                        <td> </td>
                        <td>
                            <form>
                                <label for="functional"> Functional </label>
                                <input type="radio" id="functional" name="status" value="Functional">
                            
                                <label for="non-functional"> Non-Functional</label>
                                <input type="radio" id="non-functional" name="status" value="Non-Functional">
                                
                            </form>
                        </td>
                    </tr>
            </table>
        </div>
        </div>
    </div>
<?php include_once './includes/footer.php'; ?>