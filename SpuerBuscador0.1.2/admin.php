<?php
if (isset($_POST["nombre"])&&isset($_POST["pass"]))
{
	include("conexion.php");
	$query = "SELECT * FROM registerylogin WHERE nombre='".$_POST["nombre"]."' and pass='".$_POST["pass"]."'";
	$envio = $conexion->query($query);
	if (($envio->num_rows)>0){
						session_start();
						$_SESSION['nombre']=$_POST["nombre"];
						header("Location:home.php");
						echo "Has iniciado sesion";
						}
	else{
    echo "<p>Datos de Acceso Incorrectos</p>";
  }
}

?>