<?php

require_once("../classes/Conexion.php");

class formulario
{
    protected $user = null;

    function __construct()
    {
        if (isset($_POST["type"]))
            $this->typeOfForm($_POST["type"]);
    }
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
            case "deleteCount":
                $user->delete($_POST["pwd"]);
            case "userChangePWD":
                $user->userChangePWD($_POST["oldpwd"], $_POST["newpwd"]);
                break;
            case "emailchange":
                $user->userChangeMail($_POST["newmail"], $_POST["pwd"]);
                break;
            case "AdminDeleteCount":
                $user->AdminUserDelete($_POST["id"]);
                break;
            case "showAllUsers":
                $user->showAllUsers();
                break;
            default:
                header("Location:error.php?error=form");
        }
    }
}

$form = new formulario();
