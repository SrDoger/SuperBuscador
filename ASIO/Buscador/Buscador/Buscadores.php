<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/mercadolibre.css">
    <title>Busqueda</title>
</head>
<style>
    #cajaGrande{
        display:flex;
        flex-direction: row;

        width:100%; 
        margin-left:5%;
        border:1px solid black;
    }
    #mercadolibre{
        width: 40%;
    }
    .containerMerc{
        min-width: 200px;
    }
    .ebay{
        width: 40%;
    }
    .containerEbay{
        min-width: 200px;
    }
</style>
<body>
    <div id="cajaGrande">
        <?php
        include 'Mercadolibre.php';
        include 'Ebay.php';

        ?>
    </div>
</body>

</html>