

<?php
    require_once "dbconnect.php";
    $prodID = $_GET['id'];
    
    if($_POST)
    {
        $prodName = $_POST ['productName'];
        $price = $_POST ['price'] ;
        $category = $_POST['category'];
       $queryUpdate = "UPDATE prod SET productName= ' $prodName ', category = '$category', price= '$price ' WHERE id = '$prodID '";  
       $res = $conn->query($queryUpdate);
       echo "\nSuccessfully Updated!";
    }
  
 

?>

<form action = "" method="post">
    <link rel="stylesheet" href="style3.css">
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
    <input type="submit" value="UPDATE">
</form>