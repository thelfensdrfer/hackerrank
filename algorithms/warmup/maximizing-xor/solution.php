<?php

$fp = fopen('php://stdin', 'r');

$left = (int) fgets($fp);
$right = (int) fgets($fp);

$max = 0;

for ($a = $left; $a <= $right; $a++) {
	for ($b = ($a + 1); $b <= $right; $b++) {
		$result = $a ^ $b;
		if ($result > $max)
			$max = $result;
	}
}

echo $max . "\n";
