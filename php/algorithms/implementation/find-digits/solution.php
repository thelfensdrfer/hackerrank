<?php

$fp = fopen('php://stdin', 'r');
$n = (int) fgets($fp);

for ($i = 0; $i < $n; $i++) {
	$numberWord = trim(fgets($fp));

	$numberArray = str_split($numberWord);
	$number = (int) $numberWord;

	$cuts = 0;

	foreach ($numberArray as $digit) {
		$digit = (int) $digit;
		if ($digit > 0 && $number % $digit === 0)
			$cuts++;
	}

	echo $cuts . "\n";
}
