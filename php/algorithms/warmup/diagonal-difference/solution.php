<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);
$matrix = [];

$northWest = 0;
$southWest = 0;

for ($i = 0; $i < $n; $i++) {
	$row = explode(' ', fgets($fp));
	$matrix[] = array_map('intval', $row);
}

for ($i = 0; $i < $n; $i++) {
	$northWest += $matrix[$i][$i];
	$southWest += $matrix[($n - $i - 1)][$i];
}

echo abs($northWest - $southWest) . PHP_EOL;
