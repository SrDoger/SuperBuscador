<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Error</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">



    </nav>
    <header class="text-center text-white masthead" style="background: url(&quot;assets/img/nis/idea1.png&quot;) center / 200px repeat;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">

                    <h1 class="mb-5">
                        <?php
                        require("classes/Session.php");
                        $session = new session();
                        $session->setvalor("locate", null);
                        echo $error = "<h1>Error tipo: " . $_GET["error"] . "</h1>";
                        if($_GET["error"] == 'one_coco_is_missing')
                        echo '<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"    >Click aqui para comunicarte con la administracion</a>';
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>