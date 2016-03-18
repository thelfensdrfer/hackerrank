<?php

$fp = fopen('php://stdin', 'r');

$lines = (int) fgets($fp); // 1 <= $lines <= 10

for ($i = 0; $i < $lines; $i++) {
	$cuts = (int) fgets($fp); // 2 <= $cuts <= 10.000.000

	if ($cuts < 4) {
		echo $cuts - 1 . "\n";
		continue;
	}

	if ($cuts % 2 === 0) {
		$left = $cuts / 2;
		$right = $left;
	} else {
		$left = ceil($cuts / 2);
		$right = $left - 1;
	}

	echo $left * $right . "\n";
}
