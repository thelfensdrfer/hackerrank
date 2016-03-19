<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);
$string = trim(fgets($fp));
$k = (int) fgets($fp);

$stringLength = strlen($string);

$encrypted = '';

for ($i = 0; $i < $stringLength; $i++) {
	$ascii = ord($string[$i]);
	$char = $string[$i];

	if ($ascii >= 65 && $ascii <= 90) {
		$char = chr((($ascii - 65 + $k) % 26) + 65);
	} else if ($ascii >= 97 && $ascii <= 122) {
		$char = chr((($ascii - 97 + $k) % 26) + 97);
	}

	$encrypted .= $char;
}

echo $encrypted . PHP_EOL;
