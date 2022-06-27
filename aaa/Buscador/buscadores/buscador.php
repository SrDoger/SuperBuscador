<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>Document</title>
<script>

function enviar(){

setInterval(ocultar, 5000);
document.getElementById("modal").style.visibility = "visible";
//document.f.submit();*/
}

function ocultar(){
    document.getElementById("modal").style.visibility = "hidden"; 
}

</script>



<style>
    #modal{
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        visibility: none;
    }
</style>



</head>

<body>

    <div id="modal" >
        <?php

         readfile("../../Vista.html");
        ?>
    </div>

    <form action="buscadores.php" method="post" name="F">
        <input type="text" name="element" id=""><br>
        <input type="checkbox" name="mercadolibre" id="" value="on">
        <label for="">Mercado Libre</label><br>
        <input type="checkbox" name="ebay" id="" value="on">
        <label for="">Ebay</label><br>
        <input type="buttom" value="Buscar" onclick= enviar()>
        <div id="options">
            <input type="range" name="minPrice" value="100000" min="1" max="100000"
                oninput="this.nextElementSibling.value = this.value">
            <output></output>
            <input type="range" name="maxPrice" value="100000" min="1" max="100000"
                oninput="this.nextElementSibling.value = this.value">
            <output></output>
        </div>
    </form>
    <a href="../index.html">Volver</a>

    <script>
        $('.modal').on('click',function(){
            $('.modal-content').load('getContent.php?id=2',function(){
                $('#myModal').modal({show:true});
            });
        });
    </script>
</body>

</html>