<!DOCTYPE html>
<?php
    session_start();
    include("conexion.php");
?>
<html lang="es">
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
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                       <a href="#"><i class="fa fa-instagram"></i></a>
                       <a href="#"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="login a-right">
                   <?php
                        if(isset($_SESSION['nombre'])){?>
                                <a class="accon" href="account.php"><p><span><i class="fa fa-user"></i></span><?php echo $_SESSION['nombre'];?></p></a>
                                <a class="accon" href="logout.php"><p><span><i class="fa fa-sign-out"></i></span>out</p></a>
                            <?php
                        } else {?>
                            <a class="accon" href="login.php"><p><span><i class="fa fa-user"></i></span>Login</p></a>
                            <a class="accon" href="register.php"><p><span><i class="fa fa-pencil"></i></span>Register</p></a>
                        <?php
                    }?>
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
                    <a href="index.php"><h2 style="color: white !important;">A S I O</h2></a>
                   </div>
                </div>
                <div class="col-md-9">
                    <!--<ul class="nav navbar-nav nabar">
                      <li class="active"><a href="index.html">Inicio</a></li>
                      <li><a href="Buscadori.php">Tienda</a></li>
                      <li><a href="#">Caracteristicas</a></li>
                      <li><a href="#">Paginas</a></li>
                    </ul>-->
                </div>
            </div>
        </div>
    </section>
    <div class="logu"></div>
</header>
<div class="cabeza">
    <div class="way">
    </div>
</div>
<div class="search-bar">
    <h1 style="color: #252525 !important;">ALL SHOPS IN ONE</h1>
        <form action="buscador.php" method="post">
            <input class="search" type="text" name="element" id=""><br>
            <input type="text" name="mercadolibre"  style="display:none;" id="" value="on">
            <input type="text" name="ebay" style="display:none;" id="" value="on">
            <div id="options">
                <input type="text" class="filtro" name="minPrice" placeholder="Precio Minimo" value="0">
                <input type="text" class="filtro" name="maxPrice" placeholder="Precio Maximo " value="10000000">
            </div>
            <div>
                <input class="En" type="submit" value="Buscar">
            </div>
        </form> 
</div>
<section class="our_skill">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">
                    <h2>Quienes somos?</h2>
                    <p>Somo estudiantes de una escuela tecnica de la especialidad computacion.
                       Con nuestros conocimientos adquiridos de informatica que estos abarcan el uso de lenguajes de programacion,
                       nos reunimos para desarrollar la pagina que ahora estan viendo.</p>
                    <p>La pagina usa PHP, html, CSS, JavaScript</p>
                </div>
            </div>
           
        </div>
    </div>
</section>
<section class="team">
   <div class="clear"></div>
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2 style="color: #7e7e7e;">Conocenos</h2>
           </div>
       </div>
        <div class="row">
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/nis/userimg.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Tobias Santino Guzzo</h3>
                <p>Lider, manejo de PHP</p>
            </div>
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/nis/userimg.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Allan Joaquin Montero</h3>
                <p>Manejo de APIS</p>
            </div>
            <div class="col-md-3">
               <div class="teams">
                    <img src="img/nis/userimg.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Calle Ezequiel</h3>
                <p>Diseñador</p>
            </div>
            <div class="col-md-3 centar">
               <div class="teams">
                    <img src="img/nis/userimg.jpg">
                <div class="icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="overlay"></div>
            </div>
                <h3>Dariel Castillo Correa</h3>
                <p>Manejo de HTML, CSS, PHP</p>
            </div>
            
        </div>
    </div>
</section>
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