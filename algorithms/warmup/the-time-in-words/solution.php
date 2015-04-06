<?php

$fp = fopen('php://stdin', 'r');

$hour = (int) fgets($fp);
$minute = (int) fgets($fp);

$hours = [
	1 => 'one',
	2 => 'two',
	3 => 'three',
	4 => 'four',
	5 => 'five',
	6 => 'six',
	7 => 'seven',
	8 => 'eight',
	9 => 'nine',
	10 => 'ten',
	11 => 'eleven',
	12 => 'twelve',
	13 => 'one',
];

$minutes = [
	1 => 'one',
	2 => 'two',
	3 => 'three',
	4 => 'four',
	5 => 'five',
	6 => 'six',
	7 => 'seven',
	8 => 'eight',
	9 => 'nine',
	10 => 'ten',
	11 => 'eleven',
	12 => 'twelve',
	13 => 'thirteen',
	14 => 'fourteen',
	15 => 'fifteen',
	16 => 'sixteen',
	17 => 'seventeen',
	18 => 'eighteen',
	19 => 'nineteen',
	20 => 'twenty',
	30 => 'thirty',
	40 => 'fourty',
	50 => 'fifty',
];

for ($i = 21; $i < 60; $i++) {
	if ($i % 10 !== 0) {
		$str = (string) $i;
		$minutes[$i] = $minutes[$str[0] . '0'] . ' ' . $minutes[$str[1]];
	}
}

if ($minute === 0) {
	echo $hours[$hour] . ' o\' clock' . "\n";
	exit;
}

if ($minute === 1) {
	echo 'one minute past ' . $hours[$hour] ."\n";
}

if ($minute === 15) {
	echo 'quarter past ' . $hours[$hour] . "\n";
	exit;
}

if ($minute % 30 === 0) {
	echo 'half past ' . $hours[$hour] . "\n";
	exit;
}

if ($minute === 45) {
	echo 'quarter to ' . $hours[$hour + 1] . "\n";
	exit;
}

if ($minute === 59) {
	echo 'one minute to ' . $hours[$hour] ."\n";
}

if ($minute < 30) {
	echo $minutes[$minute] . ' minutes past ' . $hours[$hour] ."\n";
}

if ($minute > 30) {
	echo $minutes[60 - $minute] . ' minutes to ' . $hours[$hour + 1] ."\n";
}
