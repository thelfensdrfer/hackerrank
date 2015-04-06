<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);
$pi = [
	3,
	1,
	4,
	1,
	5,
	9,
	2,
	6,
	5,
	3,
	5,
	8,
	9,
	7,
	9,
	3,
	2,
	3,
	8,
	4,
	6,
	2,
	6,
	4,
	3,
	3,
	8,
	3,
	3,
];

for ($i = 0; $i < $n; $i++) {
	$song = fgets($fp);
	$words = explode(' ', $song);
	$song = true;

	for ($j = 0; $j < count($words); $j++) {
		$word = trim($words[$j]);

		if (strlen($word) !== $pi[$j]) {
			echo 'It\'s not a pi song.' . "\n";
			$song = false;
			break;
		}
	}

	if ($song === true)
		echo 'It\'s a pi song.' . "\n";
}
