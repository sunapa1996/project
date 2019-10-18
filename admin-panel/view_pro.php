<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cosmetic Admin : Add product</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
    
?>
</head>

<body>
    
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Cosmetic Admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Hello, <?php echo $_SESSION["user_name"].' '.$_SESSION["user_last"] ?> &nbsp; <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="#"><i class="fas fa-shopping-bag fa-3x"></i> Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_pro.php">เพิ่มสินค้า</a>
                            </li>
                            <li>
                                <a href="view_pro.php" class="active-menu">แก้ไข/ลบสินค้า</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>รายการสินค้าทั้งหมด</h2>
                        <h5></h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <?php
                    $sql = "SELECT * FROM product";
                    $result = mysqli_query($conn,$sql);
                ?>
                <div class="container-fluid">
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Desciprtion</th>
                                    <th scope="col">price</th>
                                    <th scope="col">type</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($result)>0){
                                    while($rows = mysqli_fetch_assoc($result)){
                                        $id = $rows["pid"];
                                        $image = $rows["p_image"];
                                        $name = $rows["p_name"];
                                        $price = $rows["p_price"];
                                        $des = $rows["p_des"];
                                        $type = $rows["p_type"];
                                        echo'<tr>
                                        <th scope="row">'.$id.'</th>
                                        <td><img src="../product/'.$image.'" height="100px"></td>
                                        <td>'.$name.'</td>
                                        <td>'.$des.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$type.'</td>
                                        <td><a href="deleted.php?id='.$id.'"><button type="button" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button></a></td>
                                        <td><a href="edit_pro.php?id='.$id.'"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal'.$id.'"><i class="fas fa-edit"></i></button></a></td>
                                        </tr>
                                        ';
                                    }
                                }
                                ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>