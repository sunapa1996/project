<!DOCTYPE html>
<html>
<head>
<?php
require('config.inc.php');
session_start();
if(empty($_SESSION["status"])){
    echo '<meta http-equiv="refresh" content="0.01;URL=login.php">';
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

    @import "compass/css3";

/*
I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
*/

/* Global settings */
$color-border: #eee;
$color-label: #aaa;
$font-default: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
$font-bold: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';


/* Global "table" column settings */
.product-image { float: left; width: 20%; }
.product-details { float: left; width: 37%; }
.product-price { float: left; width: 12%; }
.product-quantity { float: left; width: 10%; }
.product-removal { float: left; width: 9%; }
.product-line-price { float: left; width: 12%; text-align: right; }


/* This is used as the traditional .clearfix class */
.group:before,
.group:after {
    content: '';
    display: table;
} 
.group:after {
    clear: both;
}
.group {
    zoom: 1;
}


/* Apply clearfix in a few places */
.shopping-cart, .column-labels, .product, .totals-item {
  @extend .group;
}


/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}


/* Body/Header stuff */
body {
  padding: 0px 30px 30px 20px;
  font-family: $font-default;
  font-weight: 100;
}

h1 {
  font-weight: 100;
}

label {
  color: $color-label;
}

.shopping-cart {
  margin-top: -45px;
}


/* Column headers */
.column-labels {
  label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid $color-border;
  }
  
  .product-image, .product-details, .product-removal {
    text-indent: -9999px;
  }
}


/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid $color-border;
  
  .product-image {
    text-align: center;
    img {
      width: 100px;
    }
  }
  
  .product-details {
    .product-title {
      margin-right: 20px;
      font-family: $font-bold;
    }
    .product-description {
      margin: 5px 20px 5px 0;
      line-height: 1.4em;
    }
  }
  
  .product-quantity {
    input {
      width: 40px;
      
    }
  }
  
  .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: $font-bold;
    font-size: 12px;
    border-radius: 3px;
  }
  
  .remove-product:hover {
    background-color: #a44;
  }
}


/* Totals section */
.totals {
  .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
    
    label {
      float: left;
      clear: both;
      width: 79%;
      text-align: right;
    }
    
    .totals-value {
      float: right;
      width: 21%;
      text-align: right;
    }
  }
  
  .totals-item-total {
    font-family: $font-bold;
  }
}

.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}

.checkout:hover {
  background-color: #494;
}

/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid $color-border;
  }
  
  .column-labels {
    display: none;
  }
  
  .product-image {
    float: right;
    width: auto;
    img {
      margin: 0 0 10px 10px;
    }
  }
  
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
  
  .product-price {
    clear: both;
    width: 70px;
  }
  
  .product-quantity {
    width: 100px;
    input {
      margin-left: 20px;
    }
  }
  
  .product-quantity:before {
    content: 'x';
  }
  
  .product-removal {
    width: auto;
  }
  
  .product-line-price {
    float: right;
    width: 70px;
  }
  
}


/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  
  .product-removal {
    float: right;
  }
  
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
  
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
  
  .totals {
    .totals-item {
      label {
        width: 60%;
      }
      
      .totals-value {
        width: 40%;
      }
    }
  }
}
  </style>

	<html lang="th">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"> 
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Get your own code at fontawesome.com-->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bg.css">
</head>




<body class="bg">

<div class="container" >
<?php include "head.php"?>
<div class="container-fluid-0" style="position:relative;min-height:100%">
    <!-- <div class="bgMain" style="width: 100%;height:500px">
        <div class="container-fluid" style="padding: 50px 20px">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 300px">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/hyperX.jpg" class="d-block w-100" style="width: 200px;height: 400px;" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hyperX.jpg" class="d-block w-100" style="width: 200px;height: 400px" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hyperX.jpg" class="d-block w-100" style="width: 200px;height: 400px" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <a class="fontMain" style="color:white">Best Experince <a href="main.php"><button type="button" class="btn btn-primary" style="font-size:30px;width: 200px" ><i class="fas fa-play-circle"></i> Go  </button></a></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <td style="border-top: 0"><h1><i class="fas fa-shopping-cart"></i> Cart</h1></td>
                </tr>
                <tr>
                  
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                
              
                <?php
                $total =0;
                $express=50;
                $uid = $_SESSION["user_id"];
                $sql= "SELECT product.pid,product.p_name,product.p_type,product.p_price,product.p_image,cart.cid FROM product INNER JOIN cart ON product.pid = cart.pid;";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
                    $pro_name = $row["p_name"];
                    $pro_id = $row["pid"];
                    $pro_type = $row["p_type"];
                    $pro_image = $row["p_image"];
                    $pro_price = $row["p_price"];
                    $cart_id = $row["cid"];
                    echo '
                    <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="product/'.$pro_image.'" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="show.php?id='.$pro_id.'" class="text-dark d-inline-block align-middle">'.$pro_name.'</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: '.$pro_type.'</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>'.$pro_price.' บาท</strong></td>
                  <td class="border-0 align-middle"><a href="removecart.php?id='.$cart_id.'" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                    ';
                    $total += $pro_price;
                  }
                }else{
                  echo '
                  <tr>
                <th scope="row" class="" >

                    <div class="col-md-12-fluid" style="margin-left:300px;margin-bottom:0">
                    <img src="img/emptry2.png" alt="" width="551px" class="img-fluid rounded shadow-sm" >
                    </div>
  
                    </th>
              </tr>
                  ';
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row  p-4 bg-white rounded shadow-sm">
        
        <div class="col-lg-6" style="margin:auto">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">ยอดสั่งซื้อทั้งหมด </strong><strong><?php echo $total ?> บาท</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">ค่าจัดส่ง</strong><strong><?php echo $express ?> บาท</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">ภาษี</strong><strong>0 บาท</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">สรุปยอดรวม</strong>
                <h5 class="font-weight-bold"><?php echo $total+$express ?> บาท</h5>
              </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
          </div>
        </div>
      </div>

    </div>
  </div>
    <!-- <div class="container-fluid-0" style="width:100%">
        <div class="row" style="height:500px;width:90%;margin:auto;background:wheat">
            <div class="col-md-4" style="height:100%;width:50%;margin:100px 100px">
                test
            </div>
        </div>

    </div> -->
    </div>





 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>