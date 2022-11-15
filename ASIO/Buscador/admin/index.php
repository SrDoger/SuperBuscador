
<?php
require("../classes/Session.php");
$session = new session();
if ($_SESSION["admin"] == 1) {
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Home - main</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
        <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">

            <?php
            $session->setvalor("locate", "../");
            $session->isConnect();
            ?>

        </nav>
        <header class="text-center text-white masthead" style="background: url(&quot;../assets/img/nis/idea1.png&quot;) center / 200px repeat;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto position-relative">
                        <h1 class="mb-5">Seccion de Administracion</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                        <ol>
                            <li><a href="replay.php?query=showAllUsers">Ver lista de usuarios</a></li>
                            <li><a href="replay.php?query=deleteCount">Buscar usuario por mail</a></li>
                            <li><a href="replay.php?query=">Buscar usuario por id</a></li>
                        </ol>
                        <ol>
                            <h2>Por ID</h2>
                            <li><a href="replay.php?query=AdminDeleteCount">eliminar usuario</a></li>
                            <li><a href="replay.php?query=AdminUserChangePWD">Cambiar contraseña de usuario</a></li>
                            <li><a href="replay.php?query=AdminUserChangeMail">Cambiar mail de usuario</a></li>
                            <li><a href="replay.php?query=AdminUserChangeNickName">Cambiar nombre del usuario</a></li>

                        </ol>
                        <li><a href="../index.php">volver al inicio</a></li>
                    </div>
                </div>
            </div>
        </header>
        <footer class="bg-light footer">
        </footer>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.min.js"></script>
    </body>

    </html>

    <!DOCTYPE html>
<?php } else {
    header("location:../index.php");
}
=======
<?php
require("../classes/Session.php");
$session = new session();
if ($_SESSION["admin"] == 1) {
?>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Home - main</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
        <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">

            <?php
            $session->setvalor("locate", "../");
            $session->isConnect();
            ?>

        </nav>
        <header class="text-center text-white masthead" style="background: url(&quot;../assets/img/nis/idea1.png&quot;) center / 200px repeat;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto position-relative">
                        <h1 class="mb-5">Seccion de Administracion</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                        <ol>
                            <li><a href="replay.php?query=showAllUsers">Ver lista de usuarios</a></li>
                            <li><a href="replay.php?query=deleteCount">Buscar usuario por mail</a></li>
                            <li><a href="replay.php?query=">Buscar usuario por id</a></li>
                        </ol>
                        <ol>
                            <h2>Por ID</h2>
                            <li><a href="replay.php?query=AdminDeleteCount">eliminar usuario</a></li>
                            <li><a href="replay.php?query=">Cambiar contraseña de usuario</a></li>

                        </ol>
                        <li><a href="../index.php">volver al inicio</a></li>
                    </div>
                </div>
            </div>
        </header>
        <footer class="bg-light footer">
        </footer>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.min.js"></script>
    </body>

    </html>

    <!DOCTYPE html>
<?php } else {
    header("location:../index.php");
}

?>