<!DOCTYPE html>

<html>

<?php
      include("conexion.php");
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
</head>

<body style="background-image: url(https://i.pinimg.com/564x/e6/80/c1/e680c193340a4939786ae1609bcc2551.jpg);">
    <div class="row">
        <div class="col-3" style="margin-top: -17px;width: 36px;height: 668px;"><img src="assets/img/images.jpg" style="height: 100%;width: 100%;"></div>
        <div class="col-6 flex-nowrap" style="height: 260px;width: 662px;margin-top: 101px;padding: 0px;">
            <h2 class="text-center wobble animated form-heading" style="font-size: 65px;color: white;height: 86px;width: 100%;">TRIBO</h2>
            <form action="P_login.php" method="post" data-aos="fade-up-left" data-aos-duration="750" class="custom-form" style="width: 472px;height: 275px;background: rgba(0,0,0,0);font-size: 20px;margin: auto;">
                <div class="form-group d-flex" style="width: 233px;">

                <input class="form-control" type="text" name="nombre"  placeholder="Ingrese su nombre" style="width: 294px;margin-right: -5px;height: 44px;margin-left: -8px;"><br>
                <input class="form-control float-right" type="password" name="pwd" placeholder="Ingrese su contraseña" style="width: 189px;margin-right: 16px;margin-left: 21px;height: 43px;"></div>

                <!--BOTON PARA HACER LO DE MANDAR A CREAR SESION  -->
              <button
                    class="btn btn-light btn-block submit-button" type="submit" style="background-color: brown;font-family: Times New Roman, cursive;font-size: 22px;">Iniciar Sesión&nbsp;</button><br>
            <!--BOTON PARA HACER LO DE MANDAR A CREAR SESION  -->
            <a href="login-1.php"><button class="btn btn-light btn-block submit-button" type="button" style="background-color: brown;font-family: Times New Roman, cursive;font-size: 20px;">Crear Sesión</button></a>
            <br>
            <button class="btn btn-light btn-block submit-button"
                        type="button" style="width:auto;background-color: cyan;font-family: Times New Roman, cursive;width: 392px;font-size: 20px;">Iniciar Sesión con google</button></a></form><br>
        </div>
        <div class="col-3" style="margin-top: -20px;"><img src="assets/img/maxresdefault.jpg" style="height: 100%;width: 100%;"></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
</body>

</html>
