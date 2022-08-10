<?php
session_start();
$pwd = $_POST['pwd'];
$pwd_2 = md5($pwd);

if (isset($_POST["nombre"])&&isset($pwd))
{
	include("conexion.php");
	$query = "SELECT id FROM usuarios WHERE nombre='".$_POST["nombre"]."' and pwd='".$pwd_2."'";
	echo $query;
	$envio = $conn->query($query);
	if (($envio->num_rows)>0){
						$_SESSION['nombre']=$_POST["nombre"];
						$_SESSION['id'] = $envio->fetch_array(MYSQLI_NUM)[0];
						header("Location:index.php?".$id);
						echo "Has iniciado sesion";
						}
	else{
    header("location:login_register.php");
  }
}
/**recive informacio que invio en el formulario mediante la  */
?>
