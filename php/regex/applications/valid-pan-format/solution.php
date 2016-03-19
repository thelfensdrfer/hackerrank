<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

for ($i = 0; $i < $n; $i++) {
	$line = trim(fgets($fp));

	if (preg_match('/[A-Z]{5}\d{4}[A-Z]/', $line) === 0)
		echo "NO\n";
	else
		echo "YES\n";
}
