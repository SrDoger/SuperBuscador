<?php include("conexion.php")?>
<!DOCTYPE html>
<html style="background: #f1a8b1;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <style media="screen">
      .contenedor_principal{
        width: 100%;
        height: 200px;
      /*  background: red;*/
      }
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
        margin-left: 5%;
        border:20px solid white;
        padding: 2%;
        border-radius: 100px;
      }
      
    </style>
</head>

<body style="background-image: url(https://i.pinimg.com/564x/e6/80/c1/e680c193340a4939786ae1609bcc2551.jpg);border-radius: 0px;border-width: 5px;border-style: solid;">
    <div class="contenedor_principal">
      <div class="contenedor_secundario">
        <div class="icono_inicio" style="width: 500;height: auto;">
          <a href="https://www.instagram.com/tribo_restaurante/?hl=es-la" style="font-size: 40px; margin-top:10%;">
            <img src="logo.png" alt="" width="60" style="margin-left:7%; margin-top:4%;"> Restaurante TRIBO
          </a>
        </div>
      </div>
    </div>
    <div class="row" style="margin-right:20%;">
        <h2 class="" style="font-size: 65px;color: rgb(255, 255, 255); margin-top:-13%; margin-left: 700px;">TRIBO</h2>
        <div class="col offset-md-0 d-md-flex justify-content-md-end">
            <div class="btn_div" style="height:100%;width:10%;background:red; margin-left:5%;margin-top:-12%; float:left;">
                <button class="btn btn-primary" type="button" style="background-color: brown; border-color: black">
                    <a href="login-1.php" >Crear cuenta</a>
                </button>
            </div>
            <div class="btn_div" style="height:100%;width:10%;background:red;margin-top:-12%; margin-right:-10%; float:left;">
                <button class="btn btn-primary" type="button" style="background-color: brown; border-color: black">
                    <a href="login.php">Inicio sesion</a>
                </button>
            </div>

        </div>
    </div>
     <!-- Muestra tratamientos -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <?php
          $consulta_sql2 = "SELECT * FROM tratamiento";
          if ($envio_consulta2 = $conn->query($consulta_sql2)) {
          while($row2 = $envio_consulta2->fetch_assoc()){
        ?>
          <div class="carousel-item active">


    <div class="card" style="width: 30%; margin-left:2%; float:left; margin-top:2%;">
        <div class="contenedor_producto" style="height:40%; width:100%; background-color:#f2cd89; position:absolute;">
            <h5 class=""style="color:white;"><?php echo $row2['tratamiento']?></h5>
        </div><br><br><br><br>
        <p class="card-text" style="margin-left:3%;">$<?php echo $row2['precio']?></p>
        <button class="btn btn-warning">Editar</button>
        <button class="btn btn-danger">Eliminar</button>

    </div>

        </div>
         <?php }
         $envio_consulta2->free();
       } ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
</body>

</html>
