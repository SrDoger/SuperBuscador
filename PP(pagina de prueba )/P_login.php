<?php

$pwd = $_POST['pwd'];
$pwd = md5($pwd);

if (isset($_POST["nombre"])&&isset($pwd)
{
	include("conexion.php");
	$query = "SELECT * FROM empleado WHERE nombre='".$_POST["nombre"]."' and pwd='".$pwd."'";
	$envio = $conn->query($query);
	if (($envio->num_rows)>0){
						session_start();
						$_SESSION['nombre']=$_POST["nombre"];
						header("Location:index-1.php");
						echo "Has iniciado sesion";
						}
	else{
    echo "<p>Datos de Acceso Incorrectos</p>";
  }
}
/** recive informacio que invio en el formulario mediante la  */
?>
