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
  function ifExistOther($DBvalue, $table, $value)
  {
    $condition = true;
    $query = "SELECT " . $DBvalue . " FROM " . $table . " WHERE " . $DBvalue . " = " . "'" . $value . "'";
    $result = $this->conn->query($query);
    if ($result->num_rows > 0)
      $condition = false; // no pueden existir 2 cuentas con mismo mail

    return $condition;
  }
}

class usuario extends BDD
{

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
        $session->setvalor("pwd", $row["pwd"]);
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
    $condition = $this->ifExistOther("mail", "usuarios", $mail);
    if (isset($mail) && isset($nombre) && isset($pwd) && $condition) {
      $query = "INSERT INTO usuarios(id,mail,nombre,pwd) VALUES (NULL,'" . $mail . "','" . $nombre . "','" . md5($pwd) . "')";
      $this->conn->query($query);  //se sube a la BDD
      header("Location:../forms/login.php");
    } else {
      header("Location:../error.php?error=registerExists");
    }
  }
  function delete($pwd)
  {
    $session = new session();
    if (md5($pwd) == $_SESSION["pwd"]) {
      $query = "DELETE FROM usuarios WHERE id='" . $_SESSION["id"] . "'";
      $this->conn->query($query);
    } else {
      header("location:../error.php?error=No se pudo borrar");
    }
  }
  function userChangeMail($newmail, $pwd)
  {
    $session = new session();

    if ((md5($pwd)) == $_SESSION["pwd"] && $this->ifExistOther("mail", "usuarios", $newmail)) {
      $query = "UPDATE usuarios SET mail='" . $newmail . "' WHERE id='" . $_SESSION["id"] . "'";
      $this->conn->query($query);
    } else {
      header("location:../error.php?error=ya esta en uso ese mail o la contraseña no correcta");
    }
  }
  function userChangePWD($oldpwd, $newpwd)
  {
    $session = new session();
    if ($_SESSION["pwd"] == md5($oldpwd)) {

      $query = "UPDATE usuarios SET pwd='" . md5($newpwd) . "' WHERE id='" . $_SESSION["id"] . "'";
      $this->conn->query($query);
      header("location:../error.php?error=se guardo bien la contraseña");
    } else {
      header("location:../error.php?error=contraseña incorrecta");
    }
  }

  ////////////////////////////////////////////////////////////////////////////////
  //                         Funciones Administradoras
  function AdminUserDelete($id)
  {
    if ($_SESSION["admin"] == 1) {
      $session = new session();
      echo $id;

      $query = "DELETE FROM carrito WHERE id_usuario='" . $id . "'";
      $this->conn->query($query);
      header("location:../admin/administrador.php");
      $query = "DELETE FROM usuarios WHERE id='" . $id . "'";
      $this->conn->query($query);
      header("location:../admin/index.php?result=successfully");
    }
  }
  function AdminUserChangePWD($id, $pwd)
  {
    if ($_SESSION["admin"] == 1) {
      $query = "UPDATE usuarios SET pwd='" . md5($pwd) . "' WHERE id='" . $id . "'";
      $this->conn->query($query);
      header("location:../admin/index.php?result=successfully");
    }
  }
  function AdminUserChangeMail($id, $mail)
  {
    if ($_SESSION["admin"] == 1) {
      if ($this->ifExistOther("mail", "usuarios", $mail)) {
        $query = "UPDATE usuarios SET mail='" . $mail . "' WHERE id='" . $id . "'";
        $this->conn->query($query);
        header("location:../admin/index.php?result=successfully");
      } else
        header("location:../error.php?error=ya esta en uso ese mail o la contraseña no correcta");
    }
  }
  function AdminUserChangeNickName($id, $nickName)
  {
    if ($_SESSION["admin"] == 1) {
      $query = "UPDATE usuarios SET nombre='" . $nickName . "' WHERE id='" . $id . "'";
      $this->conn->query($query);
      header("location:../admin/index.php?result=successfully");
    }
  }

  function showAllUsers()
  {
    if ($_SESSION["admin"] == 1) {
      $query = "SELECT * from usuarios";
      $this->conn->query($query);
      $resultado = $this->conn->query($query);
      if ($resultado->num_rows > 0) {
        $table = "
        <table>
          <tr>
            <th><p>Id</p></th>
            <th><p>Mail</p></th>
            <th><p>Nombre</p></th>
            <th><p>Contraseña</p></th> 
            <th><p>Admin</p></th> 
          </tr>";
        while ($row = $resultado->fetch_assoc()) {
          $table .=
            "<tr>
            <th><p>" . $row["id"] . "</p></th>
            <th><p>" . $row["mail"] . "</p></th>
            <th><p>" . $row["nombre"] . "</p></th>
            <th><p>" . $row["pwd"] . "</p></th> 
            <th><p>" . $row["admin"] . "</p></th> 
          </tr>";
        }
      }
      $table .= "</table>";
      echo $table;
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
