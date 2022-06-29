<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A.S.I.O</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bode">
<header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul style="margin: 0 !important">
                        <li><a href="">Account</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                       <a href="#"><i class="fa fa-facebook"></i></a>
                       <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="a-right">
                        <a href="login.php"><p><span><i class="fa fa-user"></i></span>Login</p></a>
                        <a href="register.php"><p><span><i class="fa fa-pencil"></i></span>Register</p></a>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="cont header">
        <div class=" container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="index.html"><h2>A S I O</h2></a>
                   </div>
                </div>
                <div class="col-md-9">
                    <!--<ul class="nav navbar-nav nabar">
                      <li class="active"><a href="index.html">Inicio</a></li>
                      <li><a href="buscador.php">Tienda</a></li>
                      <li><a href="#">Caracteristicas</a></li>
                      <li><a href="#">Paginas</a></li>
                    </ul>-->
                    <!--<div class="searchbar">
                        <form action="buscador.php" method="POST">
                            <input type="text" class="search" name="element" id="">
                            <input type="text" name="mercadolibre"  style="display:none;" id="" value="on">
                            <input type="text" name="ebay" style="display:none;" id="" value="on">
                            <div id="options" style="display:none;">
                                <input type="text" name="minPrice" placeholder="Precio Minimo" value="0">
                                <input type="text" name="maxPrice" placeholder="Precio Maximo " value="10000000">
                            </div>
                            <div>
                                <input class="En" type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>-->
                    
                </div>
            </div>
        </div>
    </section>
</header>
<div class="cabeza row" style="height: auto !important;">
    <div id="cajaGrande">
      <?php
        include 'Buscador/Mercadolibre.php';
        include 'Buscador/Ebay.php';
     ?>  
    </div>
    
</div>
<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                </div>
                <div class="col-md-4 center">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                </div>
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>CONTACT US</h2>
                        <a href="#"><p><i class="fa fa-map-marker" aria-hidden="true"></i>Rangpur , Bangladesh</p></a>
                        <a href="#"><p><i class="fa fa-phone" aria-hidden="true"></i>+88 01761070282</p></a>
                        <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i>sshahriar458@gmail.com</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

