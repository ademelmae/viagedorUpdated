<?php

        require_once "dbconnect.php";

        $prodName = $_POST['name'];
        $price = $_POST['price'];

        $sql = "INSERT INTO prod (name, category, price) values ('$catName', '$prodName')";
    
        $res  = $conn->query($sql);
        if($res)
            header('Location: form.html');
        else    
            echo "error happened";
?>