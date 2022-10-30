<?php

if (file_exists('../coco.jpg')) {

} else {
 header("location:../Buscador/error.php?error=one_coco_is_missing");
 
}