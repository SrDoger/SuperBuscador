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
    <link rel="stylesheet" href="./assets/css/naz.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <?php
                require("classes/Requiered.php");
                require("classes/Session.php");
                $session = new session();
                $session->isConnect();  
                ?>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url(&quot;assets/img/nis/idea1.png&quot;) center / 200px repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto position-relative">
                    <form action="Buscadores.php" method="post">
                        <div class="row padMar">
                            <div class="col padMar">
                                <div class="input-group">
                                    <input class="form-control autocomplete" name="element" type="text" placeholder="Escriba aqui" required>
                                    <input type="submit" class="option" name="merc" id="" value="on">
                                    <input type="submit" class="option" name="ebay" id="" value="on">
                                    <div id="options">
                                        <input type="text" name="minPrice" placeholder="Precio Minimo" value="0" hidden>
                                        <input type="text" name="maxPrice" placeholder="Precio Maximo " value="10000000" hidden>
                                    </div>
                                    <button class="btn btn-warning" type="submit" style="background: rgb(0,111,230);color: rgb(255,255,255);border-style: none;border-color: rgb(255,255,255);">
                                    <i class="fa fa-search" style="border-color: rgb(255,255,255);"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="cajaGrande">
      <div class="ad1 ads"></div>
      <div class="productos">
      <?php
      require_once("classes/Buscadores.php");
      if (isset($_POST['ebay'])) {
        $ebay = new ebay();
        $ebay->Search($_POST['element']);
      }
      if (isset($_POST['merc'])) {
        $merc = new merc();
        $merc->Search($_POST['element']);
      }
      ?>
      </div>
      <div class="ad2 ads"></div>
    </section>
    <footer class="bg-light footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="aboutUs.php">About</a></li>
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