<?php

echo $_FILES['upfile']['name'].'<br>';
echo $_FILES['upfile']['tmp_name'].'<br>';
echo $_FILES['upfile']['size'].'<br>';
echo $_FILES['upfile']['type'].'<br>';

echo "<hr>";

if(move_uploaded_file($_FILES['upfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/day2/".$_FILES['upfile']['name']))
    echo "Upload Success.";
else
    echo "Upload Fail.";