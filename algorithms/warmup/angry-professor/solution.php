<?php

$fp = fopen('php://stdin', 'r');
$t = (int) fgets($fp);

for ($i = 0; $i < $t; $i++) {
	$options = explode(' ', trim(fgets($fp)));
	$n = (int) $options[0];
	$k = (int) $options[1];

	$arrivals = explode(' ', trim(fgets($fp)));

	$studentsOnTime = array_reduce($arrivals, function($carry, $arrival) {
		if ($arrival <= 0)
			$carry++;

		return $carry;
	}, 0);

	if ($studentsOnTime >= $k)
		echo "NO\n";
	else
		echo "YES\n";
}
