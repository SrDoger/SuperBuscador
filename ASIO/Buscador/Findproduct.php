<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="element" id=""><br>
        <label for="">ID del producto</label><br>

        <input type="submit" value="enviar">

        </div>
    </form>
    <a href="../index.html">Volver</a>
    <?php
    if (isset($_POST["element"]) && $_POST["element"] != null) {

        require("Buscadores.php");

        $merc = new merc();

        $merc->getProduct($_POST["element"]);
    }
    ?>
</body>

</html>