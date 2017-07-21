<?php

$a="YES!!";
$b="No!!";
//echo (3 == 4) ? $a : $b;

$text = "My number is : ";
$c = 1;
$d = 4;

$e=$a;
switch($e){
    case 1: case $c:
        echo $text.'<br>'.$c; //<br> 是網頁語法
        break;
    case 4: case $d:
        echo $text."<br>".$d; //或雙引號
        break;
    case $a:
        echo "Yes!!";
        break;
    default :
        echo "Others!";
}