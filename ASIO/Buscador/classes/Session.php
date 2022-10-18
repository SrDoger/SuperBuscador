<?php
class session
{
    function start()
    {
        session_start();
        ob_start();
    }
    function trytoconnect()
    {
        if (!isset($_SESSION["try"])) {
            $_SESSION["try"] = 0;
        } else if ($_SESSION > 5) {
        } else {
            $_SESSION["try"]++;
        }
    }
    function setvalor($varset, $value)
    {
        $_SESSION[$varset] = $value;
    }
    function getvalor($var)
    {
        return $_SESSION[$var];
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