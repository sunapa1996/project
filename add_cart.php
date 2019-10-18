<?php
require('config.inc.php');
session_start();
if(empty($_SESSION["status"])){
    echo '<meta http-equiv="refresh" content="0.01;URL=login.php">';
    exit();
}
if(empty($_SESSION["user_id"])){
    header("Location: login.php");
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

$pid = $_REQUEST["id"];
$uid = $_SESSION["user_id"];

$sql = "INSERT INTO cart(pid,uid) VALUES('$pid','$uid')";
if(mysqli_query($conn,$sql)){
    $_SESSION["addcart"] = 1;
    echo '<meta http-equiv="refresh" content="0.01;URL='.$_SERVER["HTTP_REFERER"].'">';
    exit();
}
?>