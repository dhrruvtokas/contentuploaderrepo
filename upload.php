<?php
$get_file = $_FILES['file']['name'];
mkdir("check_files", 0700);
$path = "check_files/".$get_file;
move_uploaded_file($_FILES['file']['tmp_name'], $path);
?>