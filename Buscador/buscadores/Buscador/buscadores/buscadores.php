<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['mercadolibre']))
    echo "<h1>Busqueda en Mercado Libre<h1>";
    include 'mercadolibre/buscador.php';

    if (isset($_POST['ebay']))
        echo "<h1>Busqueda en Ebay<h1>";
        include 'ebay/buscador.php';

    ?>

</body>

</html>