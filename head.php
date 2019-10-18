<?php
if(empty($_SESSION["status"])){
echo '
<div class="container" style="padding:0">
<div class="jumbotron jumbotron-fluid text-center " id="div-1" style="margin:0">
<form class="form-inline my-2 my-lg-0 float-right">
    <button type="button" class="btn btn-link text-body float-right font-weight-light"><a href="login.php"><font color= #213341>Sign In</font></a></button>
    <button type="button" class="btn btn-link text-body float-right font-weight-light"><a href="signup.php"><font color= #213341>Sign Up</font></a></button>

    <div class="mx-auto" style="width: 400px">
        <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </div>
</form>

<br><br><br>

<div class="container">
    <h2 class="display-8 text-body">
        <a href="home.php" style="text-decoration:none">
            <font color=# 213341>ROSECOSMETIC.com</font>
        </a>
    </h2>

    <div class="dropdown p-3 mb-2 bg-white">


        <button type="button" class="btn btn-link text-body"> <a href="makeup.php" ><font color= #213341>MAKE UP</font></a></button>

        <button type="button" class="btn btn-link text-body"> <a href="skin.php"><font color= #213341>SKIN CARE</font></a></button>

        <button type="button" class="btn btn-link text-body"> <a href="body.php"><font color= #213341>BODY</font></a></button>

    </div>
</div>
</div>
</div>
';}
else {
echo '
<div class="container" style="padding:0">
<div class="jumbotron jumbotron-fluid text-center " id="div-1" style="margin:0">
<form class="form-inline my-2 my-lg-0 float-right">
<button type="button" class="btn btn-link text-body float-right font-weight-light"><a href="profile.php"><font color= #213341>Welcome, '.$_SESSION["user_name"].'</font></a></button>
    <a href="cart.php"><button type="button" class="btn btn-link text-body float-right font-weight-light"><i class="fas fa-shopping-cart" style="font-size:24px"></i></button></a>
    <button type="button" class="btn btn-link text-body float-right font-weight-light"><a href="logout.php"><button type="button" class="btn btn-dark">Logout</button></a></button>

    <div class="mx-auto" style="width: 400px">
        <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </div>
</form>

<br><br><br>

<div class="container">
    <h2 class="display-8 text-body">
        <a href="home.php" style="text-decoration:none">
            <font color=# 213341>ROSECOSMETIC.com</font>
        </a>
    </h2>

    <div class="dropdown p-3 mb-2 bg-white">


        <button type="button" class="btn btn-link text-body"> <a href="makeup.php" ><font color= #213341>MAKE UP</font></a></button>

        <button type="button" class="btn btn-link text-body"> <a href="skin.php"><font color= #213341>SKIN CARE</font></a></button>

        <button type="button" class="btn btn-link text-body"> <a href="body.php"><font color= #213341>BODY</font></a></button>

    </div>
</div>
</div>
</div>
';
}
?>