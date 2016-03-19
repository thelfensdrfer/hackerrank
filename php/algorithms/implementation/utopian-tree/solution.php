<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

for ($i = 0; $i < $n; $i++) {
	$t = (int) fgets($fp);

	$height = 1;
	for ($j = 0; $j < $t; $j++) {
		if ($j % 2 === 0)
			$height = $height * 2;
		else
			$height = $height + 1;
	}

	echo $height . "\n";
}
