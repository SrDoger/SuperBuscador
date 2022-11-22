<?php

require_once("../classes/Conexion.php");

class formulario
{
    protected $user = null;

    function __construct()
    {

        if (isset($_GET["type"]))
            $this->typeOfForm($_GET["type"]);
        else if (isset($_POST["type"]))
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
                if (isset($_GET["id"]))
                    $user->AdminUserDelete($_GET["id"]);
                break;
            case "AdminUserCar":
                if (isset($_GET["id"]))
                    $user->AdminUserCar($_GET["id"]);
                break;
            case "AdminUserRecord":
                if (isset($_GET["id"]))
                    $user->AdminUserRecord($_GET["id"]);
                break;
            case "AdminUserChangePWD":
                if (isset($_GET["id"]))
                    $user->AdminUserChangePWD($_GET["id"], $_GET["newPwd"]);
                break;
            case "AdminUserChangeMail":
                if (isset($_GET["id"]))
                    $user->AdminUserChangeMail($_GET["id"], $_GET["newMail"]);
                break;
            case "AdminUserChangeNickName":
                if (isset($_GET["id"]))
                    $user->AdminUserChangeNickName($_GET["id"], $_GET["newNickName"]);
                break;
            case "showSearchHistory":
                if (isset($_GET["id"]))
                    $user->showSearchHistory($_GET["id"]);
                break;
            case "showAllSearchHistory":

                $user->showAllSearchHistory();
                break;
            case "showAllUsers":
                $user->showAllUsers();
                break;
            case null:
                break;
                header("Location:error.php?error=null");
            default:
                header("Location:error.php?error=form");
        }
    }
}

$form = new formulario();
