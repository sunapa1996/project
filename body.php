<!DOCTYPE html>
<html>

<head>
    <style>
    #div-1 {
        background-color: #f5dfe4;
        color: #213341;
        font-family: ELEPHNTI;
        font-weight: bold;
    }

    #div-2 {
        color: #213341;
        font-family: ELEPHNTI;

    }

    #div-3 {
        color: #f37791;
        font-family: ELEPHNTI;

    }
    </style>

    <html lang="th">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/hover.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Get your own code at fontawesome.com-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
require('config.inc.php');
session_start();
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
        if(!empty($_REQUEST["search"])){
          $search = $_REQUEST["search"];
        }
?>
    <link rel="stylesheet" href="css/bg.css">
</head>




<body>

    <div class="container-fluid bg">
        <?php include "head.php"?>


        <div class="container" style="background:white">
            <div class="row justify-content-md-center">
                <div style="height:50px;width:100%;background:rgb(50,50,50);">
                    <h3 style="color:blanchedalmond;margin-top:8px;margin-left:10px">Body</h3>
                </div>
                <div class="container" style="height:50px;width:100%;background:rgb(250,250,250);margin:20px 0">
                    <form action="" method="get">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Search</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search by name of product.."
                                aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
        if(empty($search)){
          $sql = "SELECT * FROM product WHERE p_type = 'body'";
        }else{
          $sql = "SELECT * FROM product WHERE p_type = 'body' AND (p_name LIKE '%$search%' OR p_des LIKE '%$search%' OR p_price='$search')";
        }
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_assoc($result)){
          echo '
          
          <div class="card col-md-3 " style="margin:5px">
          <div class="col-xs-12">
    <div class="hovereffect col-md-12">
        <img class="img-responsive" src="product/'.$rows["p_image"].'" alt="">
            <div class="overlay">
                <h2>'.$rows["p_name"].'</h2>
				<p>
					<a href="detail.php?id='.$rows["pid"].'"><button class="btn btn-success">More detail</button></a>
				</p>
            </div>
    </div>
</div>
          <div class="card-body">
            <h5 class="card-title">'.$rows["p_name"].'</h5>
            <p class="card-text">&dollar;'.$rows["p_price"].'.00 USD</p>
            <p class="card-text" style="color: #DC143C">&starf; &starf; &starf; &starf; &starf;</p>
          </div>
          <a href="add_cart.php?id='.$rows["pid"].'" class="btn btn-dark"><button type="button" class="btn btn-dark" style="color: #f37791">Add to cart</button></a>
        </div>';
        }
      }else{
        echo '
        <img class="img-responsive" src="image/empty.png" alt="">';
      }
        ?>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>