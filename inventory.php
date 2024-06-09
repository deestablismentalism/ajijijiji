<?php 
    include_once './includes/header.php';
    require_once './includes/tableView.inc.php'; 
    require_once './includes/loginChecker.inc.php'; 
    checkLogin();
    Archive();
?>
    <script src="js/inventory.js"></script>
    <div class="invFormContainer"> 
        <form id="invInventory" action="includes/table.inc.php" method="post"> 
            <label for="category"> Category: </label>
            <input type="text" id="category" name="category"> 
            <label for="brand"> Brand: </label>
            <input type="text" id="brand" name="brand"> 
            <label for="quantity"> Quantity: </label>
            <input type="number" id="quantity" name="quantity"> 
            <button type="submit"> Add Item </button>
        </form>
        <?php checkInput() ?>
    </div>
    <div  class="invTableContainer">
        <div class="sortContainer">
            <h1 class = "invH1"> Sort by </h1>    
            <div class="sortItems">
                <div>
                    <label for="sort"> A-Z </label>
                    <i class="fa-solid fa-caret-down"></i>
                    <select id="sort" name="a-z">
                    <option> a-z </option>
                    <option> z-a </option>
                    </select>
                </div>
                <div>
                    <label for="sort"> Category </label>
                    <i class="fa-solid fa-caret-down"></i>
                    <select id="sort2" name="category">
                    <option> Category </option>    
                    </select>
                </div>
                <div>
                    <label for="sort"> Date Added</label>
                    <i class="fa-solid fa-caret-down"></i>
                    <select id="sort3" name="dateAdded">
                    <option value="Latest"> Latest </option>
                    <option value="Oldest"> Oldest </option>       
                    </select>
                </div>
                <div>
                    <label for="sort"> Quantity </label>
                    <i class="fa-solid fa-caret-down"></i>
                    <select id="sort4" name="quantity">
                    <option> Highest </option>
                    <option> Lowest</option>
                    </select>
                </div>
                </div>
                <div class="printContainer">
                    <button type="submit">Export Table</button>
                </div>   
            </div>
            <div class="inventoryTable">
                <table class="itemTable">
                <thead>
                    <tr>
                        <th> Action </th>
                        <th> Category </th>
                        <th> Brand </th>
                        <th> Quantity </th>
                        <th> Date Added </th>
                    </tr>
                </thead>
                    <tbody>
                    <?php displayTable()?>
                    <?php Update() ?>
                    </tbody>
                </table>
            </div>         
        </div>               
    </div>      

<?php include_once './includes/footer.php'; ?>