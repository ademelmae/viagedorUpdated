
<link rel="stylesheet" href="style3.css">

<form action ="receiveprod.php"  method = "post">
    <?php
        require_once "dbconnect.php";
        $sql = "Select catID, categoryName from cat";
        $res  = $conn->query($sql);
    ?>
     <label for="cars">Choose a category:</label>

    <select class="combo "name="category">
    <?php
        while($rows = $res->fetch_assoc())
        {
            $catID = $rows['catID'];
            $catName = $rows['categoryName'];
            echo "<option value = $catID>$catName</option>";
        }
        
    ?>
    
    </select>   

    

    
    <input type="text" placeholder="Enter product name" name="productName">
    <br>
    <input type="text" placeholder="Enter price" name="price">
    <br>
    <input type="submit" value="submit">

   
</form>