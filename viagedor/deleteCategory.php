<?php

require_once "dbconnect.php";

$prodId = $_GET['id'];

$sql = "DELETE FROM prod WHERE id= $prodId";

$res  = $conn->query($sql);
if($res)
    header('Location: catTable.php');
else    
    echo "error happened";