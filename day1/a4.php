<?php


for ($i=1; $i<10; $i++){
    for($j=1;$j<10;$j++){
        echo ($i * $j < 10)? '_'.$i * $j.'__' : $i * $j.'__';
    }
    echo '<br>';
}