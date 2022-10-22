<?php
    require_once "dbconnect.php";
    
    $cats = $_POST['category'];
    $prodName = $_POST['productName'];
    $price = $_POST['price'];
    if($prodName && $price != NULL){
        $sql = "INSERT INTO prod (productName,category, price) values ('$prodName', '$cats','$price')";

        $res  = $conn->query($sql);
        if($res)
            header('Location: addprodform.php');
        else    
            echo "error happened";

    }

    else{
        echo"empty fields";
    }
   
?>