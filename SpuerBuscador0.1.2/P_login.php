<?php
session_start();
$pwd = $_POST['pwd'];
$pwd_2 = md5($pwd);
echo $pwd;
echo "<br>";
echo $pwd_2;
if (isset($_POST["nombre"])&&isset($pwd))
{
	include("conexion.php");
	$query = "SELECT * FROM usuarios WHERE nombre='".$_POST["nombre"]."' and pwd='".$pwd_2."'";
	$envio = $conn->query($query);
	if (($envio->num_rows)>0){
						$_SESSION['nombre']=$_POST["nombre"];
						header("Location:index.php");
						echo "Has iniciado sesion";
						}
	else{
    header("location:login_register.php");
  }
}
/**recive informacio que invio en el formulario mediante la  */
?>
