<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>
<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/enwaara/pen/dRqJMv?depth=everything&order=popularity&page=78&q=shop&show_forks=false" />
<script src="https://use.typekit.net/tsl0qfs.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>>
    <html lang="th">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"> 
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/hover.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Get your own code at fontawesome.com-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
require('config.inc.php');
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
<style class="cp-pen-styles">* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-transition: 0.2s ease-in-out;
  -moz-transition: 0.2s ease-in-out;
  -o-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
  font-family: "proxima-nova", sans-serif;
  font-weight: 300;
  color: #444B54;
}
*:focus {
  outline: none;
}

body {
  background-color: #D64541;
}

#wrapper {
  position: absolute;
  top: 50%;
  margin-top: -240px;
  left: 0;
  width: 100%;
}

#container {
  width: 990px;
  height: 480px;
  margin: 0 auto;
  box-shadow: 5px 5px 20px 0px rgba(0, 0, 0, 0.7);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  position: relative;
  background: #dadfe1;
  background: -moz-linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
  background: -webkit-linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
  background: linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dadfe1', endColorstr='#f9feff',GradientType=1 );
}

#img-wrap {
  width: 550px;
  height: 100%;
  float: left;
  position: relative;
}
#img-wrap .images {
  width: 60%;
  overflow: hidden;
  margin: 270px auto 0 auto;
}
#img-wrap .images li {
  list-style: none;
  width: 33.33%;
  float: left;
  padding: 10px;
  text-align: center;
  cursor: pointer;
  opacity: 0.7;
}
#img-wrap .images li img {
  width: 80%;
}
#img-wrap .images li:nth-child(4) {
  padding-top: 25px;
}
#img-wrap .images li:hover {
  opacity: 1;
}
#img-wrap .images .big-img {
  width: 75%;
  float: none;
  padding: 0;
  margin: 0 12.5%;
  text-align: center;
  opacity: 1;
  position: absolute;
  top: -0px;
  left: 0;
}
#img-wrap .images .big-img img {
  -webkit-filter: drop-shadow(0px 7px 3px #6C7A89);
  filter: drop-shadow(0px 7px 3px #6C7A89);
}

.colors {
  width: 125px;
  margin: 20px auto;
}
.colors li {
  width: 25px;
  height: 25px;
  margin-right: 25px;
  list-style: none;
  float: left;
  background: #F3C9BF;
  cursor: pointer;
  position: relative;
  position: relative;
  opacity: 0.7;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
}
.colors li:nth-child(2) {
  background: #87E8C6;
}
.colors li:nth-child(3) {
  margin-right: 0;
  background: #BFE6EC;
}
.colors li:hover, .colors li.target {
  opacity: 1;
  -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
  box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
}

.info {
  width: 440px;
  height: 100%;
  float: right;
  padding: 50px 50px 50px 0;
  background-position: 80% 0%;
  background-size: 65%;
}
.info h1 {
  font-size: 2em;
  font-weight: 400;
  float: left;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.info h2 {
  font-size: 1em;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  padding: 5px 0 20px 0;
  float: left;
  color: #8199A3;
}
.info p {
  clear: both;
  margin-bottom: 7px;
  line-height: 1.5em;
  font-size: 50px;
  letter-spacing: 0.5px;
}
.inf #text{
    font-size: 50px;
}
.info #pricing, .info #coloring {
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 1.5em;
  color: #D64541;
}
.info #price {
  margin-top: 15px;
  float: none;
}

.important {
  width: 50%;
  float: left;
  margin-top: 15px;
}

.form {
  width: 50%;
  float: right;
  margin-top: 15px;
}
.form .color {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0 20px;
  width: 100%;
  height: 40px;
  border: none;
  background: #F0C2C2;
  font-size: 0.9em;
  letter-spacing: 1px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  color: #444B54;
  cursor: pointer;
  font-weight: 400;
}
.form .color:hover {
  background: #efb7b7;
}

button {
  width: 100%;
  margin-top: 30px;
  border: none;
  background: #1abc9c;
  padding: 20px 0;
  font-size: 2em;
  line-height: 1.1em;
  letter-spacing: 1px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  color: #F2F2F2;
  cursor: pointer;
}
button:hover {
  background: #16a085;
}

@media screen and (max-width: 1440px) {
  #wrapper {
    transform: scale(0.7);
  }
}
</style></head><body class="bg">
    <?php
        $pid = $_REQUEST["id"];
        $sql = "SELECT * FROM product WHERE pid='$pid'";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_assoc($result);
    ?>
    <?php
require('config.inc.php');
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
<div id="wrapper">
<div class="container"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><button type="button" class="btn btn-primary" style="width:10%;height10px;margin-left:60px"><< Back</button></a></div>
  <?php
  echo '
  <div id="container">
    
    <div id="img-wrap">
      <div>
        
      </div>
      <ul class="images">
        <li class="big-img" style="margin-top:60px">
          <img src="product/'.$rows["p_image"].'"/>
        </li>
        
      </ul>
      
    </div>
    
    <div class="info">
      
      <h1>'.$rows["p_name"].'</h1>
      <h2>Catagory: '.$rows["p_type"].'</h2>
      
      <p>'.$rows["p_des"].'</p>
      
      <div class="important">
        <p id="pricing">Price<p>
        <h1 id="price">$ '.$rows["p_price"].'</h1>
      </div>
      

      
      <a href="add_cart.php?id='.$rows["pid"].'"><button>Add to cart</button></a>
      
    </div>
    
  </div>
  
  ';
  ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/index.js"></script>
</body></html>