<?php
class RQ
{
    private static $maxSearch = 10;


    function __construct()
    {
        
    }
    
    function request(){
        if (file_exists($_SESSION["locate"] . '../coco.jpg')) {
        } else {
           header("location:" . $_SESSION["locate"] . "error.php?error=one_coco_is_missing");
        }
    }
}
