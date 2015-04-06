<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

for ($i = 0; $i < $n; $i++) {
	$word = str_split(trim(fgets($fp)));
	$length = count($word);
	$center = floor($length / 2);
	$operations = 0;

	for ($j = 0; $j < $center; $j++) {
		$first = ord($word[$j]);
		$last = ord($word[$length - 1 - $j]);

		$operations += abs($first - $last);
	}

	echo $operations . "\n";
}
