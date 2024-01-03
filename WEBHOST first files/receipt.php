<?php
$fname = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];
$folder="pics/".$fname;
echo $folder;
move_uploaded_file($tempname, $folder);
?> 

