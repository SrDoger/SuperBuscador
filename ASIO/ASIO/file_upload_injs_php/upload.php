<?php
  $file_random_name=rand(1,1000);
  $file_name=$_FILES['uploadfile']['name'];
  $file_type=$_FILES["uploadfile"]["type"];
  $file_size=round($_FILES["uploadfile"]["size"] / (1024 * 1024),2)." MB";
  $ext = pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION); 
  $file_new_name=$file_random_name."-".$file_size.".".$ext;
  $file_move_location = "upload/".$file_new_name;
 if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file_move_location) ) { 
  echo '<img src="upload/'.$file_new_name.'" style="width:115px; height: 115px; margin-top: 1px;">';
} else { 
  echo $response= "Error Found "; 
}
?> 


