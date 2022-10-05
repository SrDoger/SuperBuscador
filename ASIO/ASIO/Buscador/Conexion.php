<?php

class BDD
{
  protected $conn;

  public function __construct()
  {
    $this->conn = new mysqli("localhost", "root", "", "empresa");
    mysqli_set_charset($this->conn, 'UTF8');
  }
}
class Carrito extends BDD{
  function addCarrito($idProducto, $IdUsuario)
  {
    $query = "INSERT INTO carrito(idProducto, id_usuario) VALUES ('$idProducto','$IdUsuario')";
    mysqli_query($this->conn, $query);
  }
  function delCarrito($idProducto, $IdUsuario)
  {
    $query = "DELETE FROM carrito WHERE idProducto = '$idProducto' AND id_usuario = '$IdUsuario'";
    mysqli_query($this->conn, $query);
  }
  /**
   * Devuelve una lista de los productos del usuario
   */
  function findCarrito($IdUsuario)
  {
    $lista = array();
    $query = "SELECT idProducto FROM carrito WHERE id_usuario = '$IdUsuario'";
    $resultado = $this->conn->query($query);
    if ($resultado->num_rows > 0) {
      while ($row = $resultado->fetch_assoc()) {
        array_push($lista, $row["idProducto"]);
      }
    }
    return $lista;
  }
  /* function getIdUsuario()
  {
    $conn = new mysqli("localhost", "root", "", "empresa");
    $query = "SELECT id FROM usuarios WHERE nombre = '" . $_POST["nombre"] . "' AND pwd = '" . $_POST["pwd"] . "'";
    $resultado = $conn->query($query);
  }*/

  function p_login()
  {
    session_start();
    $pwd = $_POST['pwd'];
    $pwd_2 = md5($pwd);

    if (isset($_POST["nombre"]) && isset($pwd)) {
      $query = "SELECT * FROM usuarios WHERE nombre='" . $_POST["nombre"] . "' and pwd='" . $pwd_2 . "'";
      $envio = $this->conn->query($query);

      if (($envio->num_rows) > 0) {
        $_SESSION['nombre'] = $_POST["nombre"];
        $_SESSION['id'] = $_POST["id"];
        return header("Location:index.php");
      } else {
        return header("location:login_register.php");
      }
    }
  }
  function logout()
  {
    @session_start();
    session_destroy();
    return header("Location: index.php");
  }
}
