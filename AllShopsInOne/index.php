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
        <div class="container"><a class="navbar-brand" href="#">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <?php
                        if(isset($_SESSION['nombre'])){?>
                                <a class="accon" href="account.php"><p><span><i class="fa fa-user"></i></span><?php echo $_SESSION['nombre'];?></p></a>
                                <a class="accon" href="logout.php"><p><span><i class="fa fa-sign-out"></i></span>out</p></a>
                            <?php
                        } else {?>
                            <a class="btn btn-primary ms-auto" role="button" href="login_register.php">Sign In</a>
                        <?php
                    }?>
                </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url(&quot;assets/img/nis/idea1.png&quot;) center / 200px repeat;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5">ALL SHOPS IN ONE</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form>
                        <div class="row padMar">
                            <div class="col padMar">
                                <div class="input-group">
                                    <input class="form-control autocomplete" name="element" type="text" placeholder="Escriba aqui"> 
                                    <button class="btn btn-warning" type="submit" style="background: rgb(0,111,230);color: rgb(255,255,255);border-style: none;border-color: rgb(255,255,255);"><i class="fa fa-search" style="border-color: rgb(255,255,255);"></i></button>
                                    <input type="text" name="mercadolibre"  style="display:none;" id="" value="on">
                                    <input type="text" name="ebay" style="display:none;" id="" value="on">
                                    <div id="options" style="display: none;">
                                        <input type="text" class="filtro" name="minPrice" placeholder="Precio Minimo" value="0">
                                        <input type="text" class="filtro" name="maxPrice" placeholder="Precio Maximo " value="10000000">
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                        <h3>Para que sirve?</h3>
                        <p class="lead mb-0">Esta pagina esta hecha con el propósito de ahorrar tiempo a la ahora de buscar productos en tiendas online</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-layers m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                        <h3>Sistema de filtrado</h3>
                        <p class="lead mb-0">Esta pagina cuenta un un sistema de filtrado el cual te dará el mejor de los precios de múltiples paginas pero del mismo producto</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                        <h3>Fácil de usar</h3>
                        <p class="lead mb-0">la pagina es muy fácil de usar, pero en caso que sea lo contrario la pagina contara con&nbsp; la descripción de lo que hace la mayoría de los botones</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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