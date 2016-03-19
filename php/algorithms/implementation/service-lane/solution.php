<?php

$fp = fopen('php://stdin', 'r');

$options = explode(' ', fgets($fp));

$t = (int) $options[1];

$lane = array_map(function($str) {
	return (int) $str;
}, explode(' ', fgets($fp)));

for ($i = 0; $i < $t; $i++) {
	list($serviceLaneStart, $serviceLaneEnd) = array_map(function($str) {
		return (int) $str;
	}, explode(' ', fgets($fp)));

	$serviceLane = array_slice($lane, $serviceLaneStart, ($serviceLaneEnd - $serviceLaneStart + 1));

	echo min($serviceLane) . "\n";
}
