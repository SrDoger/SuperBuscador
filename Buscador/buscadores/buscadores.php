<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/mercadolibre.css">
    <title>Busqueda</title>
</head>

<body>
    <?php
    include 'mercadolibre/buscador.php';
    if (isset($_POST['ebay']))
        include 'ebay/buscador.php';

    ?>
</body>

</html>