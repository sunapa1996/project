<?php
echo '
<style>
    
    #div-1{
        background-color: #f5dfe4;
        color: #213341; 
        font-family: ELEPHNTI;
        font-weight: bold;
    }

    #div-2{
        color: #213341; 
        font-family: ELEPHNTI;
        
    }

    #div-3{
        color: #f37791; 
        font-family: ELEPHNTI;
        
    }

    
  </style>

  <html lang="th">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/hover.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--Get your own code at fontawesome.com-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php';
require('config.inc.php');
if(empty("admin")){
    echo '<meta http-equiv="refresh" content="1;URL=index.html">';
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
    
?>
<link rel="stylesheet" href="css/bg.css">
?>