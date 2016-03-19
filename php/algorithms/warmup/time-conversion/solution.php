<?php

$handle = fopen ("php://stdin","r");

$time = fgets($handle);
fclose($handle);

preg_match('/(\d+):(\d+):(\d+)(\D+)/i', $time, $matches);

$hours = intval($matches[1]);
$minutes = intval($matches[2]);
$seconds = intval($matches[3]);
$format = trim($matches[4]);

if (strtoupper($format) == 'PM' && $hours !== 12)
	$hours += 12;
else if (strtoupper($format) == 'AM' && $hours === 12)
	$hours -= 12;

echo str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($minutes, 2, '0', STR_PAD_LEFT) . ':' . str_pad($seconds, 2, '0', STR_PAD_LEFT) . PHP_EOL;
