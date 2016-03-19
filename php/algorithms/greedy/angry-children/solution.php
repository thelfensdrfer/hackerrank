<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);
$k = (int) fgets($fp);

$list = [];

for ($i = 0; $i < $n; $i++) {
	$list[] = (int) fgets($fp);
}

sort($list);
$runMax = count($list) - $k + 1;
$unfairValue = -1;

for ($i = 0; $i < $runMax; $i++) {
	$tempUnfairValue = $list[$i + $k - 1] - $list[$i];

	if ($tempUnfairValue < $unfairValue || $unfairValue === -1)
		$unfairValue = $tempUnfairValue;
}

echo $unfairValue . "\n";
