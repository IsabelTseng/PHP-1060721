<?php

echo 123;
echo 99.99;
echo "自串";
echo TRUE;
echo FALSE; //空白，就像NULL

echo "<hr>"; //分隔線

$arr1 = ['a', 'b', 'c']; //沒有索引 //(字動索引)從0開始
$arr2 = ['k1' => 'a', 'k2' => 'b'];
print_r($arr1);//(會告訴你索引名稱)
print_r($arr2);

echo "<hr>";

$arr3 = [
            ['a', 'b', 'c'],
            ['d', 'e', 'f']
        ]; 

$arr4 = [
            'student1' => ['k1' => '1', 'k2' => '2'],
            'student2' => ['k1' => 'a', 'k2' => 'b']
        ]; 
print_r($arr3);
print_r($arr4);

echo "<hr>";

$a=10.23;
$b= (integer)$a;

echo $a . '-';
echo $b;

echo "<hr>";

define('_PI',3.1415926);
$line = 10;
echo _PI * $line * $line;