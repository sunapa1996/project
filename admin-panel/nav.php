<?php
echo '
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Cosmetic Admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                                <a href="del_pro.php">ลบสินค้า</a>
                            </li>
                            <li>
                                <a href="edit_pro.php">แก้ไขสินค้า</a>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-desktop fa-3x"></i> User</a>
                    </li>
                </ul>

            </div>

        </nav>
'
?>