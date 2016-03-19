<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);
$array = explode(' ', fgets($fp));
array_walk($array, 'intval');

echo array_sum($array) . PHP_EOL;
