<?php
error_reporting(E_ALL);
// Вывод ошибок
ini_set('display_errors', 0);
$a = NULL;
$b = 20;

if (is_null($a)) {
	echo "a - null" . PHP_EOL;
}

echo $b . PHP_EOL;
unset($b);

echo $b . PHP_EOL;
echo gettype($b) . PHP_EOL;
