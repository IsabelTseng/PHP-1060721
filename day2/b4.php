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

$sql = "SELECT * FROM todo";
$result = $mysqli->query($sql);

while($row = $result->fetch_array()){
    echo "<p>".$row['title'].$row['title'];
}

$mysqli->close();