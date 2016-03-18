<?php

$fp = fopen('php://stdin', 'r');

$options = explode(' ', trim(fgets($fp)));
$n = (int) $options[0];
$m = (int) $options[1];

$players = [];
$results = [];

for ($i = 0; $i < $n; $i++) {
	$topics = str_split(trim(fgets($fp)));
	$players[$i] = array_filter($topics);
}

$maxTopics = 0;
$maxTopicsTeams = 0;

for ($i = 0; $i < $n; $i++) {
	for ($j = $i + 1; $j < $n; $j++) {
		$key = $i . '-' . $j;
		$max = count($players[$i] + $players[$j]);

		if ($max > $maxTopics) {
			$maxTopics = $max;
			$maxTopicsTeams = 1;
		} elseif ($max === $maxTopics) {
			$maxTopicsTeams++;
		}
	}
}

echo $maxTopics . "\n";
echo $maxTopicsTeams . "\n";
