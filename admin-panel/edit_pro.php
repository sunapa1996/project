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
    if(empty($_REQUEST["id"])){
        header("Location: view_pro.php");
    }
    mysqli_query($conn,"SET character_set_results=utf8");
    mysqli_query($conn,"SET character_set_client='utf8'");
    mysqli_query($conn,"SET character_set_connection='utf8'");
    mysqli_query($conn,"collation_connection = utf8_unicode_ci");
    mysqli_query($conn,"collation_database = utf8_unicode_ci");
    mysqli_query($conn,"collation_server = utf8_unicode_ci");
    $id = $_REQUEST["id"];
?>
</head>

<body>
    <?php
    $sql = "SELECT * FROM product WHERE pid='$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $rows = mysqli_fetch_assoc($result);
        $type = $rows["p_type"];
        $_SESSION["image"] = $rows["p_image"];
    }
    ?>
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
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : 30 May
                2014 &nbsp; <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
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
                                <a href="add_pro.php" class="active-menu">เพิ่มสินค้า</a>
                            </li>
                            <li>
                                <a href="view_pro.php">แก้ไข/ลบสินค้า</a>
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
                        <h2>แก้ไขสินค้า ID: <?php echo $rows["pid"]?></h2>
                        <h5>Name: <?php echo $rows["p_name"]?></h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="col">
                    <div style="width:90%;margin: auto;margin-top: 50px">
                        <form action="edited.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                        <img id="blah" height="300px" src="../product/<?php echo $rows["p_image"] ?>" alt="your image" /><br>
                            เลือกไฟล์รูปภาพ:<br>
                            <input type="file" name="fileToUpload" onchange="readURL(this);"/><br>
                            ชื่อสินค้า:
                            <br>
                            <input type="text" name="pro_name" required value="<?php echo $rows["p_name"] ?>"/><br>
                            <label for="sel1">
                                ประเภท:
                            </label>
                            <select class="form-control" name="pro_type" required>
                                <option selected> <?php echo $type ?></option>
                                <?php
            $sql = "SELECT * FROM product_type WHERE type_name!='$type'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<option>'.$row["type_name"].'</option>';
                }

            }else{

            }
            ?>
                            </select>
                            ราคา:<br>
                            <input type="number" name="pro_price" value="<?php echo $rows["p_price"] ?>" required /><br>
                            คำอธิบาย:<br>
                            <textarea type="text" name="pro_des" style="height: 300px;width:100%"><?php echo $rows["p_des"] ?></textarea><br>
                            <input type="submit" value="submit" name="submit" />
                        </form>
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

    <script type="text/javascript">
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
</body>

</html>