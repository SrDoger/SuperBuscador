<?php
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
    function isConnect()
    {
        if (isset($_SESSION['nombre'])) {
            $temp =
                '<a class="btn btn-primary ms-auto" href="../forms/account.php">
                <p><span><i class="fa fa-user"></i></span>' . $_SESSION['nombre'] . '</p>
            </a>';
            if ($_SESSION['admin'] == 1) {
                $temp .= '<a class="btn btn-primary " href=""><p>administracion</p></a>';
            }
            $temp .= '<form action="../forms/forms.php" method="post">
            <input type="text" name="type" id="type" value="out" hidden>
            <button type="submit">
                <p><span><i class="fa fa-sign-out"></i></span>out</p>
            </button>
            </form>
            
            ';
        } else {
            $temp = '<a class="btn btn-primary ms-auto" role="button" href="forms/login.php">Sign In</a>';
        }
        echo $temp;
    }
    function end()
    {
        ob_end_flush();
        session_unset();
        session_destroy();
        return header("Location: index.php");
    }
} 

/*
$session = new session();
$session->setvalor("user", $_POST["user"]);
$session->setvalor("pwd", $_POST["pwd"]);
$text = $session->getvalor("user") . "<br>" . $session->getvalor("pwd");
echo $text;
$session->end();*/