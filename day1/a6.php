<?php

$score=90;
$subject="數學";
$end="!";

echo execScore($subject,100);
echo execScore($subject,$score);
echo execScore($subject,0);

function execScore($subject,$score=0)
{
    global $end;
    if($score==100)
        return $subject." Perfect".$end."<br>";
    elseif($score>=90)
        return $subject." Great".$end."<br>";
    else {
        return $subject." Good".$end."<br>";
    }
}