<?php
require_once("Session.php");

class BDD
{
  protected $conn;

  public function __construct()
  {
    $this->conn = new mysqli("localhost", "root", "", "empresa");
    mysqli_set_charset($this->conn, 'UTF8');
  }
}

class usuario extends BDD
{
  function getIdUsuario()
  {
    $session = new session();
    $conn = new mysqli("localhost", "root", "", "empresa");
    $query = "SELECT id FROM usuarios WHERE nombre = '" . $session->getvalor("user") . "' AND pwd = '" . $session->getvalor("pwd") . "'";
    return $conn->query($query);
  }

  function login($mail, $pwd)
  {
    if (isset($mail) && isset($pwd)) {
      $session = new session();
      $session->start();
      $query = "SELECT * FROM usuarios WHERE mail='" . $mail . "' and pwd='" . md5($pwd) . "'";
      $envio = $this->conn->query($query);

      if (($envio->num_rows) > 0) {
        $row = $envio->fetch_assoc();
        $session->setvalor("nombre", $row["nombre"]);
        $session->setvalor("id", $row["id"]);
        echo "logeo bien";
        header("Location:index.php");
      } else {
        $session->end();
        header("location:error.php");
      }
    }
  }
  function register($mail, $nombre, $pwd)
  {
    if (isset($mail) && isset($nombre) && isset($pwd)) {
      $condition = true;
      $query = "SELECT mail FROM usuarios WHERE mail = " . "'" . $mail . "'";
      $result = $this->conn->query($query);

      if ($result->num_rows > 0) {
        header("Location:error.html"); // no pueden existir 2 cuentas con mismo mail
        $condition = false;
      }
      if ($condition === true) {
        $query = "INSERT INTO usuarios(id,mail,nombre,pwd) VALUES (NULL,'" . $mail . "','" . $nombre . "','" . md5($pwd) . "')";
        echo $query;
        $this->conn->query($query);  //se sube a la BDD
        header("Location:login.html");
      } else {
        header("Location:error.php");
      }
    }
  }
}
class Carrito extends BDD
{
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
}
