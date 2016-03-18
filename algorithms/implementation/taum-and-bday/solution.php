<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

for ($i = 0; $i < $n; $i++) {
	$options = explode(' ', trim(fgets($fp)));
	$numberBlack = (int) $options[0];
	$numberWhite = (int) $options[1];

	$options = explode(' ', trim(fgets($fp)));
	$costBlack = (int) $options[0];
	$costWhite = (int) $options[1];
	$costTransform = (int) $options[2];

	if ($costBlack === $costWhite) {
		echo (($costBlack * $numberBlack) + ($costWhite * $numberWhite)) . "\n";
		continue;
	}

	$minStay = ($costBlack * $numberBlack) + ($costWhite * $numberWhite);
	$minB = ($costBlack * $numberBlack) + ($costBlack * $numberWhite) + ($numberWhite * $costTransform);
	$minW = ($costWhite * $numberBlack) + ($costWhite * $numberWhite) + ($numberBlack * $costTransform);

	echo min($minStay, $minB, $minW) . "\n";
}
