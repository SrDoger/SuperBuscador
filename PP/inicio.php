<?php
  session_start();
  if(empty($_SESSION['nombre'])){
    echo "error";
  }else{
    $variable = '<a style="font-size:20px;" class="nav-link text-right" style="width: 125px;">'.$_SESSION['nombre'].' - Has iniciado sesion</a>';
  }
  ?>
<!DOCTYPE html>
<html>
<head>
        <title>Has iniciado sesion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"       aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo $variable;?></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item"></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar usuarios" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                <a class="nav-link" href="cerrar_sesion.php">Cerrar sesion</a>
            </form>
        </div>         
    </nav>
    <h1>Bienvenido !</h1>  
</body>
</html>
