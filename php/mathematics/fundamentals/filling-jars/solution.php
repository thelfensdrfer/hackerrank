<?php

$fp = fopen('php://stdin', 'r');

$options = explode(' ', fgets($fp));
$numberOfJars = (int) $options[0];
$numberOfOperations = (int) $options[1];
$numberOfCandies = 0;

for ($i = 0; $i < $numberOfOperations; $i++) {
	$operation = explode(' ', fgets($fp));
	$jarStart = (int) $operation[0];
	$jarEnd = (int) $operation[1];
	$candiesPerJar = (int) $operation[2];

	$numberOfCandies += ($jarEnd - $jarStart + 1) * $candiesPerJar;
}

$averageCandies = floor($numberOfCandies / $numberOfJars);

echo $averageCandies . "\n";
