<?php
session_start();
session_destroy();
//header("Location: index.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="alert alert-primary" role="alert">
            Has cerrado sesion exitosamente !
        </div>
        <a href="index.php" style="margin-left:35%;"><button type="button" class="btn btn-warning" style="width:30%;">Menu principal</button></a>
    </body>
</html>
