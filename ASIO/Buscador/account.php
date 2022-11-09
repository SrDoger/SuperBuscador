<?php
require("classes/Session.php");
$session = new session();
if (isset($_SESSION["id"])) {
?>
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
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">

            <?php
            $session->setvalor("locate", null);
            $session->isConnect();
            ?>
        </nav>
        <header class="text-center text-white masthead" style="background: url(&quot;assets/img/nis/idea1.png&quot;);background-size: 200px;">
            <div class="container">
                <div class="col-lg-12 d-lg-flex justify-content-lg-center">
                    <!-- Configuraciones de usuario -->

                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Cambio de Mail</p>
                        </div>
                        <div class="card-body" style="color: rgb(0,0,0); width: 400px;">
                            <form action="forms/forms.php" method="post">
                                <input type="text" name="type" id="type" value="emailchange" hidden>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3"><label class="form-label" for="email"><strong>Nuevo Mail</strong></label><input class="form-control" type="email" placeholder="nuevomail@example.com" name="newmail"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3"><label class="form-label" for="password"><strong>Contraseña</strong><br></label><input class="form-control" type="password" name="pwd"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><button class="btn btn-primary btn-sm" type="submit">Guardar Cambios</button></div>
                            </form>
                        </div>
                    </div>

                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Cambio de Contraseña</p>
                        </div>
                        <div class="card-body" style="color: rgb(0,0,0); width: 400px;">
                            <form action="forms/forms.php" method="post">
                                <input type="text" name="type" id="type" value="userChangePWD" hidden>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3"><label class="form-label" for="password"><strong>Anterior Contraseña</strong><br></label><input class="form-control" type="password" name="oldpwd"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-3"><label class="form-label" for="password"><strong>Nueva Contraseña</strong><br>
                                        </label><input class="form-control" type="password" name="newpwd"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-3"><button class="btn btn-primary btn-sm" type="submit">Guardar Cambios</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <section class="text-center bg-light features-icons"></section>
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
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>

    </html>
<?php } ?>