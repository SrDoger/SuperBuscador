<?php

$pwd = $_POST['pwd'];
$pwd_2 = md5($pwd);
echo $pwd;
echo "<br>";
echo $pwd_2;
if (isset($_POST["nombre"])&&isset($pwd))
{
	include("conexion.php");
	$query = "SELECT * FROM empleado WHERE nombre='".$_POST["nombre"]."' and pwd='".$pwd_2."'";
	$envio = $conn->query($query);
	if (($envio->num_rows)>0){
						session_start();
						$_SESSION['nombre']=$_POST["nombre"];
						header("Location:index.html");
						echo "Has iniciado sesion";
						}
	else{
    echo "<p>La cagaste wachin</p>";
  }
}
/**recive informacio que invio en el formulario mediante la  */
?>
