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
                    <a class="btn btn-primary ms-auto btnav" href="' . $_SESSION["locate"] . 'account.php">
                    <p><span><i class="fa fa-user"></i></span></p>
                </a>';
            if ($_SESSION['admin'] == 1) {
                $temp .= '<a class="btn btn-primary btnav " href="' . $_SESSION["locate"] . 'admin/index.php"><i class="fa fa-gear"></i></a>';
            }
            $temp .= '
            <a type="button" class="btn btn-primary btnav" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button" href="' . $_SESSION["locate"] . '"><i class="fa fa-shopping-cart"></i></a>
                <form action="' . $_SESSION["locate"] . 'forms/forms.php" method="post">
                <input type="text" name="type" id="type" value="out" hidden>
                <button class="btn btn-primary btnav " type="submit">
                    <p><span><i class="fa fa-sign-out"></i></span></p>
                </button>
                </form>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Compra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row" style="text-align: center;">
                        <h2>Confirmar Compra:</h2>
                        <a class="col-md-5 btn btn-primary ms-auto" style="margin:auto;" role="button" href="' . $_SESSION["locate"] . 'pdfTicket.php"><span>Confirm <i class="fa fa-shopping-cart"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modals">
                  
            </div>
            ';
        } else {
            $temp = '
            <div class="container"><a class="navbar-brand" href="' . $_SESSION["locate"] . 'index.php">A.S.I.O</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
              
            <a class="btn btn-primary ms-auto" role="button" href="' . $_SESSION["locate"] . 'forms/login.php">Sign In</a>';
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