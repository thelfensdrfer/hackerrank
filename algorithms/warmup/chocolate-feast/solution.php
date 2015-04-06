<?php

$fp = fopen('php://stdin', 'r');
$t = (int) fgets($fp);

for ($i = 0; $i < $t; $i++) {
	$options = explode(' ', trim(fgets($fp)));

	$n = (int) $options[0];
	$c = (int) $options[1];
	$m = (int) $options[2];

	$chocolates = floor($n / $c);
	$wrappers = $chocolates;
	while ($wrappers >= $m) {
		$chocolates++;
		$wrappers++;
		$wrappers = $wrappers - $m;
	}

	echo $chocolates . "\n";
}
