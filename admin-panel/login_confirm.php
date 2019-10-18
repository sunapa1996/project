<?php
    session_start();
    require('../config.inc.php');

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
    $user = $_POST["username"];
    $temp_pass = $_POST["password"];
    $pass = hash('sha512',$temp_pass);
    $sql = "SELECT * FROM member WHERE u_user='$user' AND u_pass = '$pass' AND admin='1'";
    $Query = mysqli_query($conn,$sql);
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION["user_id"] = $row["uid"];
            $_SESSION["user_name"] = $row["u_name"];
            $_SESSION["user_last"] = $row["u_last"];
            $_SESSION["user_email"] = $row["u_email"];
            $_SESSION["admin"] = 'true';
        }
        header("Location: index.php");
        exit();
    }else{
        echo 'false';
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
?>