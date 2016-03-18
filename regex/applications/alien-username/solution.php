<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

for ($i = 0; $i < $n; $i++) {
	$line = trim(fgets($fp));

	if (preg_match('/^[_|\.][0-9]{1,}([a-zA-Z]{1,})?_?$/', $line) === 0)
		echo "INVALID\n";
	else
		echo "VALID\n";
}
