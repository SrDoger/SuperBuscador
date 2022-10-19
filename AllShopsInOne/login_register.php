
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - main</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login_register.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary ms-auto" role="button" href="#">Sign In</a></div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url(&quot;assets/img/nis/idea1.png&quot;) center / 200px repeat;">
        <div>
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
                            <label for="user">Correo Electronico</label>
                            <input class="user" name="nombre" id="user" type="text" value="">
                            <label for="pass">Contraseña</label>
                            <input class="user" name="pwd" id="pass" type="password" value="">
                            <input type="submit" id="boton" value="Register">
                        </form>
                        <a href="#" class="Log-in">Log-in</a>
                    </div>
                </div>
            </div> 
        </div>
    </header>
    <footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Terms of &nbsp;Use</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© A.S.I.O 2022. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end my-auto h-100">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>