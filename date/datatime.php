<?php
date_default_timezone_set('America/New_York');

$date1 = new DateTime();

print_r($date1);

$sheldon = new DateTime('May 20th, 1980');
$neo     = new DateTime('March 11th, 1962');

if ($sheldon > $neo)
	echo 'Sheldon is younger than neo' . PHP_EOL;

$diff = $neo->diff($sheldon);

echo $diff->format('Neo is older by %Y years and %m months older') . PHP_EOL;

print_r($diff);
