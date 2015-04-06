<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);
$a = explode(' ', trim(fgets($fp)));
$result = [];

for ($i = 0; $i < $n; $i++) {
	$number = $a[$i];
	if (!isset($result[$number]))
		$result[$number] = false;
	else
		$result[$number] = true;
}

echo array_search(false, $result) . "\n";
