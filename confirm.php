<!DOCTYPE html>
<html>

<head>
    <?php require('config.inc.php')?>

    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Comfortaa|Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="regis.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('#menu').hide();
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 250) {
                        $('#menu').fadeIn();
                    } else {
                        $('#menu').fadeOut(500);
                    }
                });
            });
        })(jQuery);
    </script>
    <?php session_start(); ?>
    <?php
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $gender = trim($_POST['gender']);
        $pc = trim($_POST['pc']);
        $pro = trim($_POST['pro']);
        $raw_psw = trim($_POST['password']);
        $password = hash('sha512',$raw_psw);
    ?>
    <?php
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    
    <?php include 'nav.php' ?>
    <?php
        $sql = "SELECT MEM_EMAIL FROM member WHERE MEM_EMAIL='$email'";
        $Query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_array($Query,MYSQLI_ASSOC);
        if($result){
            
            echo '<html>';
            echo '<meta http-equiv="refresh" content="0.0001;URL=register.php?duplicate=true">';
            echo '</html>';
        }else{
            $sql = "INSERT INTO member(MEM_FIRST,MEM_LAST,MEM_EMAIL,MEM_PASS,MEM_GEN,MEM_PC,MEM_PROVICE) VALUES ('$first_name','$last_name','$email','$password','$gender',$pc,'$pro')";
            $Query = mysqli_query($conn,$sql);
            echo '<section>
            <div class="mid" style="padding: 50px 50px">
                <div class="signup-form">
                
                    <form action="confirm.php" method="post">
                        <h2>Register</h2>
                        <div class="alert alert-success" role="alert">
                            สมัครสมาชิกสำเร็จ ลงชื่อเข้าใช้ได้ทันที!
                        </div>
                        <div class="form-group">
                            <div class="row">
                                
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ชื่อจริง</label>
                                <input type="int" class="form-control" name="pc" placeholder="'.$_POST["first_name"].'" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">นามสกุล</label>
                                <input type="int" class="form-control" name="pc" placeholder="'.$_POST["last_name"].'" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="'.$_POST["email"].'" aria-label="Username" aria-describedby="addon-wrapping" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>เพศ</label>
                                    <select name="gender" class="form-control" disabled>
                                        <option value="male" selected>'.$_POST["gender"].'</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">รหัสไปรษณีย์</label>
                                <input type="int" class="form-control" name="pc" placeholder="'.$_POST["pc"].'" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">จังหวัด</label>
                                <select name="pro" class="form-control" disabled>
                                        <option selected >'.$_POST["pro"].'</option>
                                </select>
                            </div>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">มี account อยู่แล้ว? <a href="#">ลงชื่อเข้าใช้</a><br><a href="user.php">ดู user ทั้งหมดใน database</a></div>
                </div>
            </div>
        </section>';
            echo '<html>';
            echo '<meta http-equiv="refresh" content="5;URL=index.php">';
            echo '</html>';
        }

    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>