<?php
require_once("classes/Conexion.php");

$register = new usuario();

switch ($_POST["type"]) {
    
    case "register":
        $register->register($_POST["mail"], $_POST["user"], $_POST["pwd"]);
        break;
    case "login":
        $register->login($_POST["mail"], $_POST["pwd"]);
        break;
        header("Location:error.php");
    default:
}
