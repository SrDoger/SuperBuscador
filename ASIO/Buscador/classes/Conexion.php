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
      //to do: guardar ip de las conexiones en una bdd $_SERVER['REMOTE_ADDR']; 

      $query = "SELECT * FROM usuarios WHERE mail='" . $mail . "' and pwd='" . md5($pwd) . "'";
      $envio = $this->conn->query($query);
      print_r($envio->num_rows);
      if (($envio->num_rows) > 0) {
        $row = $envio->fetch_assoc();
        $session->setvalor("nombre", $row["nombre"]);
        $session->setvalor("id", $row["id"]);
        $session->setvalor("admin", $row["admin"]);
        header("Location:../index.php");
      } else {
        $session->end();
        header("location:../error.php?error=login");
      }
    }
  }
  function  logout()
  {
    $session = new session();
    if (isset($_SESSION["id"])) {

      //to do guardar ultima session
      $session->end();
      header("Location:../index.php ");
    }
  }

  function register($mail, $nombre, $pwd)
  {
    if (isset($mail) && isset($nombre) && isset($pwd)) {
      $condition = true;
      $query = "SELECT mail FROM usuarios WHERE mail = " . "'" . $mail . "'";
      $result = $this->conn->query($query);

      if ($result->num_rows > 0) {
        $condition = false; // no pueden existir 2 cuentas con mismo mail
      }
      if ($condition === true) {
        $query = "INSERT INTO usuarios(id,mail,nombre,pwd) VALUES (NULL,'" . $mail . "','" . $nombre . "','" . md5($pwd) . "')";
        echo $query;
        $this->conn->query($query);  //se sube a la BDD
        header("Location:../forms/login.php");
      } else {
        header("Location:../error.php?error=registerExists");
      }
    }
  }
  function delete($pwd)
  {
    $session = new session();
    if (md5($pwd) == $_SESSION["pwd"]) {
      $query = "DELETE FROM usuarios WHERE id='" . $_SESSION["id"] . "'";
      $this->conn->query($query);
    } else {
      header("location:../error.php");
    }
  }
  ////////////////////////////////////////////////////////////////////////////////
  //                         Funciones Administradoras
  function userDelete($id)
  {
    if ($_SESSION["admin"] == 1) {
      $session = new session();
      $query = "DELETE FROM usuarios WHERE id='" . $_SESSION["id"] . "'";
      $this->conn->query($query);
      header("location:../admin/administrador.php");
    }
  }
  function userChangePWD($id, $pwd)
  {
    if ($_SESSION["admin"] == 1) {
      $query = "UPDATE usuarios SET pwd='" . md5($pwd) . "' WHERE id='" . $id . "'";
      $this->conn->query($query);
      header("location:../admin/administrador.php");
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
