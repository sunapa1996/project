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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!--Get your own code at fontawesome.com-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
?>
<link rel="stylesheet" href="css/bg.css">
</head>




<body class="bg">

    <div class="container" style="background:white;min-height:100vh">
        <?php include "head.php"?>

        <div class="text-body text-center" id="div-2">
            <h2>Welcome to </h2>
            <h2 style="color: #f37791"> ROSÉ COSMETIC </h2>


        </div>
        <div class="container" style="background:white">
            <div class="row">
                <div class="col-sm-8 R" id="div-2">
                    <form name="form1" method="post" action="login_confirm.php">
                        <div class="form-group">

                            <label for="exampleInputEmail1">Username</label>

                            <input type="text" name="username" size="25" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>

                            <input type="password" name="password" size="10" class="form-control" id="exampleInputPassword1" placeholder="Password">

                        </div>


                        <button type="submit" class="btn btn-dark" style="color: #f37791">Submit</button>

                    </form>

                </div>
            </div>
        </div>







        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/index.js"></script>
</body>

</html>