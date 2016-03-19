<?php

function solveMeFirst($a,$b){
    return $a + $b;
}

$handle = fopen ("php://stdin","r");

$a = fgets($handle);
$b = fgets($handle);

fclose($handle);

$sum = solveMeFirst((int)$a, (int)$b);
echo $sum;
