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
$pro_name = $_POST["pro_name"];
$pro_type = $_POST["pro_type"];
$target_path = '../product/';
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);
$pro_price = $_POST["pro_price"];
$pro_des = $_POST["pro_des"];
$sql = "INSERT INTO product(p_name,p_des,p_price,p_image,p_type) VALUES('$pro_name','$pro_des','$pro_price','$pro_image','$pro_type')";
if(mysqli_query($conn,$sql)){
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
        echo "Item added sucessfully!";
        echo '<meta http-equiv="refresh" content="1;URL=add_pro.php">';
    } else{  
        echo "Sorry, file not uploaded, please try again!";  
    }
}else{
    echo 'ERROR: $sql'.mysqli_error($conn);
}
?>