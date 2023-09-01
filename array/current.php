<?php

$arr = [6, 2, 3, 4];
echo current($arr) . PHP_EOL;
echo next($arr) . PHP_EOL;
reset($arr);
echo current($arr) . PHP_EOL;
$i = 0;
echo PHP_EOL;
while ($i <= count($arr)) {
	echo current($arr) . PHP_EOL;
	next($arr);
	$i++;
}

echo end($arr) . PHP_EOL;
