<?php

require_once("../classes/Conexion.php");
$user = new usuario();

switch ($_POST["type"]) {

    case "register":
        $user->register($_POST["mail"], $_POST["user"], $_POST["pwd"]);
        break;
    case "login":
        $user->login($_POST["mail"], $_POST["pwd"]);
        break;
    case "out":
        $user->logout();
        break;
    case "delete":
        $user->delete($pwd);
    case "userDelete":
        $user->userDelete($id);
        break;
    case "userChangePWD":
        $user->userChangePWD($id, $pwd);
        break;

    default:
        header("Location:error.php?error=form");
}
