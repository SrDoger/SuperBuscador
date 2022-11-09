<?php
class security
{
    //diosito proteje este codigo de PHP
    
    function sanitize_($var)
    {
        return  filter_var($var, FILTER_SANITIZE_EMAIL);
    }
    function sanitize_mail($var)
    {
        return  filter_var($var, FILTER_SANITIZE_EMAIL);
    }
}
