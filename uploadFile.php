<?php

//$file_path = "images/";
//$file_path = $file_path.$_FILES['upload_file']['name'];

$file_path = $_FILES['upload_file']['name'];

if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $file_path)){
    echo "success";
}else{
    echo "fail";
}

?>