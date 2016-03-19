<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

$parentheses = [
	'(' => ')',
	'[' => ']',
	'{' => '}'
];

for ($i = 0; $i < $n; $i++) {
	$line = trim(fgets($fp));
	$lineLength = strlen($line);
	$stack = [];

	if ($lineLength % 2 !== 0) {
		echo "NO\n";
		continue;
	}

	for ($j = 0; $j < $lineLength; $j++) {
		$element = $line[$j];
		if (array_key_exists($element, $parentheses)) {
			array_push($stack, $line[$j]);
		} else if (count($stack) === 0) {
			echo "NO\n";
			continue 2;
		} else if ($parentheses[array_pop($stack)] !== $element) {
			echo "NO\n";
			continue 2;
		}
	}

	if (count($stack) === 0)
		echo "YES\n";
	else
		echo "NO\n";
}
