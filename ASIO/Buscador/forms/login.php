<!DOCTYPE html>
<html>
<!-- to do añadir capchat-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - main</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/login_register.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="../index.php">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary ms-auto" role="button" href="#">Sign In</a></div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url(&quot;../assets/img/nis/idea1.png&quot;) center / 200px repeat;">
        <div>
            <div class="log_container">
                <div class="login_box" id="login">
                    <div class="iner">
                        <h1>Login</h1>
                        <form class="ask" action="forms.php" method="POST">
                            <input type="text" name="type" id="" value="login" hidden>
                            <label for="user">Correo Electronico</label>
                            <input class="user" name="mail" type="email" required placeholder="Correo Electronico">
                            <label for="pass">Contraseña</label>
                            <input class="user" name="pwd" type="password" required placeholder="Contraseña">
                            <input type="submit" id="boton" value="Log-in">
                            <a href="#" class="register🖊">Register</a>
                        </form>
                    </div>
                </div>
                <div class="login_box " id="register">
                    <div class="iner">
                        <h1>Register</h1>
                        <form class="ask" action="forms.php" method="POST">
                            <input type="text" name="type" id="" value="register" hidden>
                            <input type="email" name="mail" id="email" required placeholder="Mail">
                            <input type="text" name="user" id="user" required placeholder="Usuario">
                            <input type="password" name="pwd" id="pass" required placeholder="Contraseña">
                            <!--- <input type="password" name="pwd" id="" required placeholder="Confirmar Contraseña"> To Do -->
                            <button type="submit">Enviar</button>
                        </form>
                        <a href="#" class="Log-in">Log-in</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer class="bg-light footer">
    </footer>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
    <script>src="../assets/js/script.js"</script>
</body>

</html>