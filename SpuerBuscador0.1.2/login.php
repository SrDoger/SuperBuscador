<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mainpage</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Login-Box-En.css">


</head>

<body class="bode">
<header>
    <div class="clear"></div>
    <section class="cont header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="index.php"><h2 style="color: white !important;">A.S.I.O</h2></a>
                   </div>
                </div>
            </div>
        </div>
    </section>
</header>
    <div class="row loginbox">
        <div class="col-md-8 offset-md-2">
            <div class="d-flex flex-column justify-content-center" id="login-box" style="background: rgba(0,0,0,0.8);">
                <div class="login-box-header" style="background: rgba(255,255,255,0);">
                    <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Login</h4>
                </div>
                <div class="email-login" style="background: rgba(255,255,255,0);">
                        <form action="P_login.php" method="POST">
                            <div class="user"><input type="text" name="nombre"></div>
                            <div class="user"><input type="password" name="pwd"></div>
                            <div class="submit"><input type="submit" value="enviar"></div>
                        </form>          
                    <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                        <p style="margin-bottom:0px;">Don't you have an account?<a id="register-link" href="register.php">Sign Up!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
