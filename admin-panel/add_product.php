<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/temp.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/script" src="js/temp.js"></script>
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
<style>
.shadow{
    
}
</style>
</head>

<body>
    <div class="container-fluid p-0">

        <!-- Bootstrap row -->
        <div class="row" id="body-row">
            <!-- Sidebar -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                <!-- Bootstrap List Group -->
                <ul class="list-group">
                    <!-- Separator with title -->
                    <li style="width: 100%;height: 100px;background-color: white;padding:10px">
                        <h1 style="text-shadow: 5px 2px 5px #888888;">Admin</h1>
                        <h4 style="text-shadow: 5px 2px 5px #888888;">Control-panel</h1>
                    </li>
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>MAIN MENU</small>
                    </li>
                    <!-- /END Separator -->
                    <!-- Menu with submenu -->
                    <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-dashboard fa-fw mr-3"></span>
                            <span class="menu-collapsed">สินค้า</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                    <!-- Submenu content -->
                    <div id='submenu1' class="collapse sidebar-submenu">
                        <a href="add_product.php" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">เพิ่มสินค้า</span>
                        </a>
                        <a href="view_product.php" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">ลบ/แก้ไข้</span>
                        </a>
                    </div>
                    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-user fa-fw mr-3"></span>
                            <span class="menu-collapsed">ผู้ใช้</span>
                            <span class="submenu-icon ml-auto"></span>
                        </div>
                    </a>
                    <!-- Submenu content -->
                    <div id='submenu2' class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Settings</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Password</span>
                        </a>
                    </div>
                    <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-tasks fa-fw mr-3"></span>
                            <span class="menu-collapsed">ออกจากระบบ</span>
                        </div>
                    </a>
                    <!-- Separator with title -->
                </ul>
                <!-- List Group END-->
            </div>
            <!-- sidebar-container END -->

            <!-- MAIN -->
            <div class="col">
            <h1 style="margin-top:40px">
                    เพิ่มสินค้า
                    <small class="text-muted">product</small>
                    <hr>
            </h1>
            <div style="width:90%;margin: auto;margin-top: 50px">
            <form action="writejson.php" method="post" enctype="multipart/form-data">
        เลือกไฟล์รูปภาพ:<br>
        <input type="file" name="fileToUpload" required/><br> ชื่อสินค้า:
        <br>
        <input type="text" name="pro_name" required/><br>
        <label for="sel1">แบรนของสินค้า:</label>
        <select class="form-control" name="pro_brand" required>
        <?php
            $sql = "SELECT * FROM brand";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<option>'.$row["brand_name"].'</option>';
                }

            }else{

            }
        ?>
        </select>
        <label for="sel1">ประเภท:</label>
        <select class="form-control" name="pro_type" required>
        <?php
            $sql = "SELECT * FROM type";
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
        <input type="text" name="pro_price" required/><br>
        คำอธิบาย:<br>
        <textarea type="text" name="pro_des" style="height: 300px;width:100%"></textarea><br>
        <input type="submit" value="submit" name="submit" />
    </form>
            </div>



            </div>
            <!-- Main Col END -->

        </div>
        <!-- body-row END -->


    </div>
    <!-- container -->
</body>

</html>