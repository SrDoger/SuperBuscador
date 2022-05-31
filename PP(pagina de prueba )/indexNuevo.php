<!DOCTYPE html>
<html>
<?php
  session_start();
  if(empty($_SESSION['nombre'])){
    echo "error";
  }else{
    $variable = '<a style="font-size:20px;" class="nav-link text-right" style="width: 125px;">'.$_SESSION['nombre'].' - Has iniciado sesion</a>';
  }
  ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>pagina inicial</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="assets/css/Fern-Login-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style media="screen">

      .contenedor_secundario{
        width: 50%;
        height: 100%;
      /*  background: green;*/
        float: left;
      }
      .icono_inicio{
        height: 200px;
        width: 70%;
        /*background:#000;*/
        margin-left: 10%;
        border:20px solid white;
        padding: 2%;
        border-radius: 100px;
      }

    </style>
</head>
<body style="background: rgb(241,168,177);">




<a class="navbar-brand" href="#"><?php echo $variable;?></a>

<div class="contenedor_principal">
  <div class="contenedor_secundario">
    <div class="icono_inicio">
      <a href="https://www.instagram.com/belleza_integrall/?hl=es" style="font-family: 'Aguafina Script'; font-size: 30px;">
          <img src="logo nuevo BI jpg.jpg"alt="" width="80" style="margin-left:5%; margin-top:4%;">Cuenta de instagram belleza_integrall
      </a>
    </div>
  </div>
</div>
    <div class="row" style="margin-top:50px; position:relative;">
            <h2 class="text-center wobble animated form-heading" style="font-family: 'Aguafina Script', cursive;font-size: 65px;color: #7d254a;height: 49px;width: 640px;">Belleza Integral</h2>
            <button class="btn btn-primary" type="button" style="background: rgb(199,109,221);"><a href="cerrar_sesion.php">Cerrar sesion</a></button></div>
    </div>
    
    <div class="row space-rows" style="margin-top:5%; width:30%; float:left;">
        <div class="col">
            <div class="card cards-shadown cards-hover" data-aos="flip-left" data-aos-duration="950">
                <div class="card-header" style="background: rgb(242,205,137);"><span class="space"><a href="#"></a></span>
                    <div class="cardheader-text">
                        <h4 id="heading-card">producto</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text cardbody-sub-text">precio</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row space-rows" style="margin-top:5%; width:30%; float:left;">
        <div class="col">
            <div class="card cards-shadown cards-hover" data-aos="flip-left" data-aos-duration="950">
                <div class="card-header" style="background: rgb(242,205,137);"><span class="space"><a href="#"></a></span>
                    <div class="cardheader-text">
                        <h4 id="heading-card">producto</h4>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text cardbody-sub-text">precio</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
</body>

</html>
