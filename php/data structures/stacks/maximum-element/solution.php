<?php

$fp = fopen('php://stdin', 'r');

$n = (int) fgets($fp);

$stack = [];

// TODO: Timeout
for ($i = 0; $i < $n; $i++) {
	$raw = explode(' ', fgets($fp));
	switch ($raw[0]) {
		case 1:
			array_push($stack, (int) $raw[1]);
			break;
		case 2:
			array_pop($stack);
			break;
		case 3:
			echo max($stack) . "\n";
			break;
	}
}
