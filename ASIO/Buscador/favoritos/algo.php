<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<style>
    .favorite {
        cursor: pointer;
    }

    .starInactive {
        font-variation-settings:
            'FILL'0,
            'wght'400,
            'GRAD'0,
            'opsz'48
    }

    .starActive {
        font-variation-settings:
            'FILL'1,
            'wght'400,
            'GRAD'0,
            'opsz'48
    }
</style>

<i onclick="myFunction(this)" id="star" class="fa fa-thumbs-up favorite"><span class="material-symbols-outlined">grade</span></i>


<script>
    let star = document.getElementById("star")
    let bool = false
    star.addEventListener("click", () => {
        if (bool == false) {
            star.classList.toggle("starActive")
            bool = true;
        } else {
            bool = false;
            //msg to php
        }
    })
</script>
<?php
    echo $_SESSION['id'];
    /*$query = "INSERT * FROM usuarios WHERE nombre='".$_POST["nombre"]."' and pwd='".$pwd_2."'";
	$envio = $conn->query($query);*/
?>