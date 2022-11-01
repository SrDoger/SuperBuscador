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
            <div class="container"><a class="navbar-brand" href="index.php">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <?php
                    $session->isConnect();
                    ?>
                </div>
            </div>
        </nav>
        <header class="text-center text-white masthead" style="background: url(&quot;../assets/img/nis/idea1.png&quot;) center / 200px repeat;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto position-relative">
                        <h1 class="mb-5">Tabla de usuarios</h1>
                        <?php
                        //$formulario->typeOfForm($_GET["type"]); to do mostrar todas las consultas por aca y cambiar nombre al mismo archivo
                        $formulario->typeOfForm("showAllUsers");

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
?>