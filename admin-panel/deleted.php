<?php
require('../config.inc.php');
session_start();
if(empty($_SESSION["admin"])){
    header("Location: login.php");
}
if(empty($_REQUEST["id"])){
    header("Location: view_pro.php");
    exit();
}
$conn = new mysqli($dbserver, $dbuser, $dbpass,$dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn,"SET character_set_results=utf8");
        mysqli_query($conn,"SET character_set_client='utf8'");
        mysqli_query($conn,"SET character_set_connection='utf8'");
        mysqli_query($conn,"collation_connection = utf8_unicode_ci");
        mysqli_query($conn,"collation_database = utf8_unicode_ci");
        mysqli_query($conn,"collation_server = utf8_unicode_ci");

$id = $_REQUEST["id"];
$sql = "DELETE FROM product WHERE pid='$id'";
$result = mysqli_query($conn,$sql);
if($result){
     header("Location: view_pro.php");
    exit();
}else{
    echo 'ERROR: $sql'.mysqli_error($conn);
}
?>