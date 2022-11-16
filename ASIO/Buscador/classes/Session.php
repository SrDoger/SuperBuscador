<?php
require("Requiered.php");
class session
{
    function __construct()
    {

        session_start();
        ob_start();
    }
    function setvalor($varset, $value)
    {
        $_SESSION[$varset] = $value;
    }
    function getvalor($var)
    {
        return $_SESSION[$var];
    }
    function isConnect($locate)
    {
        $this->setvalor("locate", $locate);
        $RQ = new RQ();
        $RQ->request();
        if (isset($_SESSION['nombre'])) {

            $temp = '
            <div class="container"><a class="navbar-brand" href="' . $_SESSION["locate"] . 'index.php">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <a class="btn btn-primary ms-auto" href="' . $_SESSION["locate"] . 'account.php">
                    <p><span><i class="fa fa-user"></i></span>' . $_SESSION['nombre'] . '</p>
                </a>';
            if ($_SESSION['admin'] == 1) {
                $temp .= '<a class="btn btn-primary " href="' . $_SESSION["locate"] . 'admin/index.php"><p>administracion</p></a>';
            }
            $temp .= '
            <a class="btn btn-primary ms-auto" role="button" href="' . $_SESSION["locate"] . 'confirm.php"><span class="material-symbols-outlined">shopping_cart</span></a>
                <form action="' . $_SESSION["locate"] . 'forms/forms.php" method="post">
                <input type="text" name="type" id="type" value="out" hidden>
                <button type="submit">
                    <p><span><i class="fa fa-sign-out"></i></span>out</p>
                </button>
                </form>
                </div>
            </div>
            ';
        } else {
            $temp = '<a class="btn btn-primary ms-auto" role="button" href="' . $_SESSION["locate"] . 'forms/login.php">Sign In</a>';
        }
        echo $temp;
    }
    function end()
    {
        ob_end_flush();
        session_unset();
        session_destroy();
        return header("Location: " . $_SESSION['locate'] . "index.php");
    }
} 

/*
$session = new session();
$session->setvalor("user", $_POST["user"]);
$session->setvalor("pwd", $_POST["pwd"]);
$text = $session->getvalor("user") . "<br>" . $session->getvalor("pwd");
echo $text;
$session->end();*/