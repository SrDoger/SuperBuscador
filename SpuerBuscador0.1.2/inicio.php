<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>mainpage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Photo-Gallery.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/w3-sidebar.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/Social-Vertical.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="fondol">
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" id="sidebutton">☰</button><br>
        <div class="lista" style="text-align: center">
            <li type="none"><a href="imagenesuser.php" id="items">Imagenes</a></li><br>
            <li type="none"><a href="disenosuser.php" id="items">Diseños</a></li><br> 
        </div>
        <div class="row" id="social">
            <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
                <div id="social_vertical">
                    <a href="https://www.facebook.com" style="color: rgba(255,255,255,0.69);" target="_blank">
                    <i class="fa fa-facebook d-block d-lg-flex justify-content-lg-center pt-4 p-3"></i></a>
                    <a href="https://www.instagram.com" style="color: rgba(255,255,255,0.69);"target="_blank">
                    <i class="fa fa-instagram d-block d-lg-flex justify-content-lg-center p-3"></i></a>
                    <a href="https://twitter.com" style="color: rgba(255,255,255,0.69);" target="_blank">
                    <i class="fa fa-twitter d-block d-lg-flex justify-content-lg-center p-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <header class="header-dark" style="padding-bottom: 180px;">
            <div id="one" class="row no-gutters">
                <div class="w3-teal">
                    <button id="sidebutton" onclick="w3_open()">☰</button>
                </div>
                <div class="col-3 offset-lg-0 m-auto"><a href="inicio.php">
                        <h3 style="color: rgb(255,255,255); width: 350px; height: 40px;"></h3>
                    </a></div>
            </div>
        <div>
            <div class="container hero">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2">
                        <div style="background-color: rgba(255,255,255,0.69);border-radius: 50px;width: auto; height: 200px; ">
                            <h1 class="text-center"><img style="width: auto; height: 200px;" src="../pagina/assets/img/logo2.png" alt=""></h1>
                        </div>
                        <div style="background-color: rgba(255,255,255,0.69);border-radius:15px;width: 730px; height: auto; margin-top:15px; text-align: center; ">
                            <h1 class="text-center" style="color:black;">Bienvenido</h1>
                            <p>
                                te presento mi sitio web donde podes ver numerosas ideas de casa hechas de coteiners 
                                con esto se logra hacer hogares vivienda que reutiliza materiales de construcción y ecológica.
                            </p>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
</body>

</html>
