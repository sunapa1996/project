<?php
require('../config.inc.php');
session_start();
if(empty($_SESSION["admin"])){
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

$pro_image = $_FILES['fileToUpload']['name'];
$id = $_REQUEST["id"];
$name = $_POST["pro_name"];
$type = $_POST["pro_type"];
$target_path = '../product/';
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);
$price = $_POST["pro_price"];
$des = $_POST["pro_des"];
if(!empty($_FILES['fileToUpload']['name'])){
    $sql = "UPDATE product SET p_name='$name',p_des='$des',p_price='$price',p_type='$type',p_image='$pro_image' WHERE pid='$id'";
    if(mysqli_query($conn,$sql)){
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
            echo '<meta http-equiv="refresh" content="0.01;URL=view_pro.php">';
        } else{  
            echo "Sorry, file not uploaded, please try again!";  
        }
    }else{
        echo 'ERROR: $sql'.mysqli_error($conn);
    }
}else{
    $sql = "UPDATE product SET p_name='$name',p_des='$des',p_price='$price',p_type='$type' WHERE pid='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: view_pro.php");
        exit();
    }else{
        echo 'ERROR: $sql'.mysqli_error($conn);
    }
}
?>