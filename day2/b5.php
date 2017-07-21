<?php

//資料庫連線
$mysqli=new mysqli('localhost', 'root', '','crud');

//check
if($mysqli->connect_error){
    echo "<p>Failed to connect to MySQL: ". $mysqliconnect_error;
}else{
    echo "<p>mysql connect ok.";
}

$mysqli->set_charset("utf8");

$sql = "INSERT INTO todo (title, content) VALUES ('789','789789')";
$mysqli->query($sql);

$mysqli->close();