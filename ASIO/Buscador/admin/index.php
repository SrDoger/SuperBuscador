<?php
require("../classes/Session.php");
$session = new session();
if ($_SESSION["admin"] == 1) {
?>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/admin.css">
        <link rel="stylesheet" href="../assets/css/navbar.css">
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

            $session->isConnect("../");
            ?>

        </nav>
        <header style="padding-top: 40px; background: url(&quot;../assets/img/nis/idea1.png&quot;) center / 200px repeat;">
            <div class="overlay"></div>
            <div class="container text-center text-white">
                <div class="row">
                    <div class="col-xl-9 mx-auto position-relative">
                        <h1 class="mb-5" style="background-color: white; color: black; border-radius: 10px ; " >Seccion de Administracion</h1>
                    </div>
                </div>
            </div>
            <div class="Config">
            <div class="lista position-relative">
                    <li class="btn-primary"><a href="replay.php?query=showAllUsers">Ver lista de usuarios</a></li>
                    <li class="btn-primary"><a href="replay.php?query=showAllSearchHistory">Ver lista de busquedas de los usuarios</a></li>
                    <li class="btn-primary"><a href="replay.php?query=deleteCount">Buscar usuario por mail</a></li>
                    <li class="btn-primary"><a href="replay.php?query=">Buscar usuario por id</a></li>
                    <h2>Por ID</h2>
                    <li class="btn-primary"><a href="index.php?query=AdminDeleteCount">Eliminar usuario</a></li>
                    <li class="btn-primary"><a href="index.php?query=AdminUserChangePWD">Cambiar contraseña de usuario</a></li>
                    <li class="btn-primary"><a href="index.php?query=AdminUserChangeMail">Cambiar mail de usuario</a></li>
                    <li class="btn-primary"><a href="index.php?query=AdminUserChangeNickName">Cambiar nombre del usuario</a></li>
                    <li class="btn-primary"><a href="../index.php">volver al inicio</a></li>
            </div>
            <div class="parameters">
                <div class="edits">
                    <div class="? ✔">
                        <h2>Eliminar cuenta</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="AdminDeleteCount" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="? ✔">
                        <h2>Cambiar contraseña de cuenta</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="AdminUserChangePWD" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <input type="text" name="newPwd" id="newPwd" required pattern="[A-Za-Z0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="? ✔">
                        <h2>Cambiar mail de cuenta</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="AdminUserChangeMail" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <input type="mail" name="mail" id="newMail" required pattern="[A-Za-Z0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="? ✔">
                        <h2>Cambiar nombre de usuario de cuenta</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="AdminUserChangeNickName" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <input type="text" name="newNickName" id="newNickName" required pattern="[A-Za-Z0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="? ✔">
                        <h2>Ver Carrito</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="AdminUserCar" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="? ✔">
                        <h2>Ver Historial</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="AdminUserRecord" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                    <div class="? ✔">
                        <h2>Ver Historial de busquedas</h2>
                        <form action="replay.php?" method="get">
                            <input type="text" name="query" id="query" value="showSearchHistory" hidden required>
                            <input type="number" name="id" id="id" required pattern="[0-9]{1,}">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
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
