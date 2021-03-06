<?php include("conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login_register.css">
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
        <div class="log_container">
            <div class="login_box" id="login">
                <div class="iner">
                    <h1>Login</h1>
                    <form class="ask" action="P_login.php" method="POST">
                        <label for="user">Nombre de Usuario</label>
                        <input class="user" name="nombre" type="text">
                        <label for="pass">Contraseña</label>
                        <input class="user" name="pwd" type="password">
                        <input type="submit" id="boton" value="Log-in">
                        <a href="#" class="register🖊">Register</a>
                    </form>
                </div>
            </div>
            <div class="login_box show" id="register">
                <div class="iner">
                    <h1>Register</h1>
                    <form class="ask" action="guardar.php" method="POST">
                        <label for="user">Nombre de Usuario</label>
                        <input class="user" name="nombre" id="user" type="text" value="">
                        <label for="pass">Contraseña</label>
                        <input class="user" name="pwd" id="pass" type="password" value="">
                        <input type="submit" id="boton" value="Register">
                    </form>
                    <a href="#" class="Log-in">Log-in</a>
                </div>

            </div>
        </div>    
    </header>
    <script src="js/script.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Ultimate-Sidebar-Menu.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>