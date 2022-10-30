<?php

require_once("../classes/Conexion.php");

class formulario
{
    protected $user = null;

    function typeOfForm($type)
    {
        $user = new usuario();
        switch ($type) {

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
                $user->delete($_POST["pwd"]);
            case "userDelete":
                $user->userDelete($_POST["id"]);
                break;
            case "userChangePWD":
                $user->userChangePWD($_POST["id"], $_POST["pwd"]);
                break;
            case "showAllUsers":
                $user->showAllUsers();
                break;
            default:
                //header("Location:error.php?error=form");
        }
    }
}

//$form = new formulario();
//$form->typeOfForm($_POST["type"]);
