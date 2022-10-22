
<?php
    require_once "dbconnect.php";
    
    $catName = $_POST['categoryName'];
    $catStatus = $_POST['status'];
    $sql = "INSERT INTO cat (categoryName, status ) values ('$catName','$catStatus')";

    $res  = $conn->query($sql);
    if($res)
        header('Location: addcatform.php');
    else    
        echo "error happened";

?>