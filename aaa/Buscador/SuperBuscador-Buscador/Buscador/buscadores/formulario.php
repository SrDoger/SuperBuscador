<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="centrado" id="onload">
        <div id="loader">
            <!--Logo-->
            <img src="../../../../SuperBuscador-Animaciones/Nahuel/Logo/CargaConRueda.gif" alt="" class="img">
            <!-- Divs para las animaciones de fondo -->
            <div class="area">
                <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <!-- Texto de carga -->

            <div class="container"> 
                <svg viewBox="0 0 960 300">
                    <symbol id="s-text">
                        <text text-anchor="middle" x="50%" y="80%">Loading...</text>
                    </symbol>

                    <g class="g-ants">
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                        <use xlink:href="#s-text" class="text-copy"></use>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <form action="buscadores.php" method="post">
        <input type="text" name="element" id=""><br>
        <input type="checkbox" name="mercadolibre" id="" value="on">
        <label for="">Mercado Libre</label><br>
        <input type="checkbox" name="ebay" id="" value="on">
        <label for="">Ebay</label><br>
        <input type="submit" value="enviar">
        <div id="options">
            <input type="range" name="minPrice" value="100000" min="1" max="100000" oninput="this.nextElementSibling.value = this.value">
            <output></output>
            <input type="range" name="maxPrice" value="100000" min="1" max="100000" oninput="this.nextElementSibling.value = this.value">
            <output></output>


        </div>
    </form>
    <a href="../index.html">Volver</a>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/loader.js"></script>
</body>

</html>