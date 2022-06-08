<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A.S.I.O</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bode">
<header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul style="margin: 0 !important">
                        <li><a href="">Account</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="icon">
                       <a href="#"><i class="fa fa-facebook"></i></a>
                       <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="a-right">
                        <a href="login.php"><p><span><i class="fa fa-user"></i></span>Login</p></a>
                        <a href="register.php"><p><span><i class="fa fa-pencil"></i></span>Register</p></a>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="cont header">
        <div class=" container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="index.html"><h2>A.S.I.O</h2></a>
                   </div>
                </div>
                <div class="col-md-9">
                    <ul class="nav navbar-nav nabar">
                      <li class="active"><a href="index.html">Inicio</a></li>
                      <li><a href="buscadores/buscador.html">Tienda</a></li>
                      <li><a href="#">Caracteristicas</a></li>
                      <li><a href="#">Paginas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</header>
<div class="cabeza">
    <div class="way">
    </div>
</div>
<div class="search-bar">
    <h1>ALL SHOPS IN ONE</h3>
    <form action="">
        <input class="search" type="search">
        <div>
            <input class="sutmit" type="button">
            <input class="login" type="button">
        </div>
    </form>
</div>
<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                </div>
                <div class="col-md-4 center">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i>Best sellers</p></a>
                </div>
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>CONTACT US</h2>
                        <a href="#"><p><i class="fa fa-map-marker" aria-hidden="true"></i>Rangpur , Bangladesh</p></a>
                        <a href="#"><p><i class="fa fa-phone" aria-hidden="true"></i>+88 01761070282</p></a>
                        <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i>sshahriar458@gmail.com</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php

if (isset($_POST['mercadolibre'])){
    echo '<div id="mercadolibre">';
    $mlid = str_replace(" ", "%20", $_POST['element']);
    $data = json_decode(file_get_contents('https://api.mercadolibre.com/sites/MLA/search?q='.$mlid,'&Minimum-price=3000'), true);

    $valor = 0;
    foreach ($data["results"] as $i)
    {
        $valor += 1;
        foreach ($i as $a["id"])
        {

            $mlid = $a["id"];
            
            $data = json_decode(file_get_contents('https://api.mercadolibre.com/items/'.$mlid), true);
            echo '<div class="containerMerc">';
            print $a["id"];     
            echo '<br>';
            echo $data['title'];  
            echo '<br>';
            echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['thumbnail'], '">' ;
            echo '<br>';
            echo '<p>Precio: '.$data['price'],'$</p>';
            
            echo '<br>';
            echo '<div class="imgSecundarias">';
            foreach ($data['pictures'] as $j){   
                //echo '<p>'.$j['url'], '</p>';
            // echo '<img class="imgPrincipal" style="height: 200px; width: 200px;" src="', $data['url'], '">' ;
            
                //to do: poner las imagenes extra  
            }
            echo '</div>';
            /*echo '<div class="atributos">';
            foreach($data['attributes'] as $aux){
                $string = $aux['name'].': '.$aux['value_name'];
                print_r($string);
                
                echo '<br>';
                
            }
            echo '</div>';;*/
            echo '<hr>';
            echo '</div>';;
            break;
            
        }
        if($valor >= 10){
            break;
        }
        
    }
    echo '</div>';
}
?>