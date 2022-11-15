<?php
class RQ
{
    private static $maxSearch = 10;


    function __construct()
    {
        if (file_exists($_SESSION["locate"] . '../coco.jpg')) {
        } else {
            header("location:" . $_SESSION["locate"] . "error.php?error=one_coco_is_missing");
        }
    }
}

<?php
class RQ{
    function __construct(){
        if (file_exists($_SESSION["locate"].'../coco.jpg')) {

        } else {
         header("location:".$_SESSION["locate"]."error.php?error=one_coco_is_missing");
         
        }   
    }
}

