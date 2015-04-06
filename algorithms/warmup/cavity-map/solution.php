<?php

$fp = fopen('php://stdin', 'r');
$n = (int) fgets($fp);

$map = [];

function print_map($n, array $map) {
	for ($y = 0; $y < $n; $y++) {
		echo implode('', $map[$y]) . "\n";
	}
}

// Input
for ($y = 0; $y < $n; $y++) {
	$x = str_split(trim(fgets($fp)));
	$map[$y] = $x;
}

$result = $map;

// Search
for ($y = 1; $y < ($n - 1); $y++) {
	for ($x = 1; $x < ($n - 1); $x++) {
		$height = $map[$y][$x];
		if ($map[$y - 1][$x] < $height && $map[$y][$x + 1] < $height && $map[$y + 1][$x] < $height && $map[$y][$x - 1] < $height)
			$result[$y][$x] = 'X';
		else
			$result[$y][$x] = $height;
	}
}

// Outout
print_map($n, $result);
