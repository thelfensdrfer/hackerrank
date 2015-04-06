<?php

$fp = fopen('php://stdin', 'r');
$n = (int) fgets($fp);
$sticks = explode(' ', trim(fgets($fp)));
$stickCount = $n;

while (count($sticks) > 0) {
	$smallestStick = min($sticks);

	$sticks = array_map(function($stick) use($smallestStick) {
		return $stick - $smallestStick;
	}, $sticks);

	echo count($sticks) . "\n";

	$sticks = array_filter($sticks);
}
