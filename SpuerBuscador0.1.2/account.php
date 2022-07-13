<!DOCTYPE html>
<?php
    session_start();
    include("conexion.php");
?>
<?php
    if(isset($_SESSION['nombre'])){
?>
    <body class="bode">
    <header>
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul style="margin: 0 !important">
                            <li><a href="account.php">Account</a></li>
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
                                    <a class="accon" href="login.php"><p><span><i class="fa fa-user"></i></span><?php echo $_SESSION['nombre'];?></p></a>
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
    </header>
    <section class="cabeza" style="height: auto;">
        <div class="dobe">
            <div class="inerdobe">
                <h1>Hola, <?php echo $_SESSION['nombre']?></h1>
                <div class="imgperf">
                    <img id="imgperf" src="img/nis/userimg.jpg" alt="">
                </div>
                <div class="change">
                    <div class="change_user">
                        <form action="" method="post">
                            <label for="nick">Nombre de Usuario</label>
                            <input id="nick" type="text" value="">
                            <label for="mail">Correo Electronico</label>
                            <input id="mail" type="text" value="">
                            <label for="name">Nombre</label>
                            <input id="name" type="text" value="">
                            <label for="subname">Apellido</label>
                            <input id="subname" type="text" value="">
                        </form>
                    </div>
                    
                    <div class="password">
                        <form action="">
                            <label for="pass">Contraseña</label>
                            <input type="text" id="pass" value="">
                            <label for="newpass">Nueva contraseña</label>
                            <input type="text" id="pass" value="">
                            <label for="confirmpass">Confirma contraseña</label>
                            <input type="text" id="pass" value="">
                        </form>
                    </div>
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
                    </div>
                    <div class="col-md-4 center">
                        <h2>INFORMATION</h2>
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
    <?php } else {
        header("Location:index.php");
}?>
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

<script>
    
</script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>