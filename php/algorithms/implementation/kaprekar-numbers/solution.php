<?php

$fp = fopen('php://stdin', 'r');

$low = (int) fgets($fp);
$high = (int) fgets($fp);
$found = false;

for ($i = $low; $i <= $high; $i++) {
	$square = (string) pow($i, 2);
	$length = strlen($square);
	$left = 0;
	$right = 0;

	$center = floor($length / 2);
	$left = (int) substr($square, 0, $center);
	$right = (int) substr($square, $center);

	if ($left + $right === $i) {
		$found = true;
		echo $i . ' ';
	}
}

if ($found === false)
	echo 'INVALID RANGE';

echo "\n";
