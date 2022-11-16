
<?php
require("../classes/Session.php");
require_once("../forms/forms.php");
$session = new session();
$formulario = new formulario();
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
        <style>
            p {
                color: greenyellow;
            }

            table,
            th,
            td {
                background-color: black;
                border: 1px solid blue;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">

            <?php
            $session->isConnect("../");
            ?>
        </nav>
        <header class="text-center text-white masthead" style="background: url(&quot;../assets/img/nis/idea1.png&quot;) center / 200px repeat;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto position-relative">
                        <h1 class="mb-5">Tabla de usuarios</h1>
                        <div class="?">
                            <h2>Eliminar cuenta</h2>
                            <form action="replay.php?" method="get">
                                <input type="text" name="query" id="query" value="AdminDeleteCount" hidden required>
                                <input type="number" name="id" id="id" required>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                        <div class="?">
                            <h2>Cambiar contraseña de cuenta</h2>
                            <form action="replay.php?" method="get">
                                <input type="text" name="query" id="query" value="AdminUserChangePWD" hidden required>
                                <input type="number" name="id" id="id" required>
                                <input type="text" name="newPwd" id="newPwd" required>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                        <div class="?">
                            <h2>Cambiar mail de cuenta</h2>
                            <form action="replay.php?" method="get">
                                <input type="text" name="query" id="query" value="AdminUserChangeMail" hidden required>
                                <input type="number" name="id" id="id" required>
                                <input type="mail" name="mail" id="newMail" required>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                        <div class="?">
                            <h2>Cambiar nombre de usuario de cuenta</h2>
                            <form action="replay.php?" method="get">
                                <input type="text" name="query" id="query" value="AdminUserChangeNickName" hidden required>
                                <input type="number" name="id" id="id" required>
                                <input type="text" name="newNickName" id="newNickName" required>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                        <div class="?">
                            <h2>Ver Carrito</h2>
                            <form action="replay.php?" method="get">
                                <input type="text" name="query" id="query" value="AdminUserCar" hidden required>
                                <input type="number" name="id" id="id" required>
                              
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                        <div class="?">
                            <h2>Ver Historial</h2>
                            <form action="replay.php?" method="get">
                                <input type="text" name="query" id="query" value="AdminUserRecord" hidden required>
                                <input type="number" name="id" id="id" required>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                        
                        <?php
                        //$formulario->typeOfForm($_GET["type"]); to do mostrar todas las consultas por aca y cambiar nombre al mismo archivo
                        $formulario->typeOfForm($_GET["query"]);


                        ?>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">

                        <li><a href="index.php">volver al atras</a></li>
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
