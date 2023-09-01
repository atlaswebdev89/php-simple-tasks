<?php
error_reporting(E_ALL);
// Вывод ошибок
ini_set('display_errors', 0);


$a = NULL;
if ($a) {
	echo "GOOD" . PHP_EOL;
} else {
	echo "BAD" . PHP_EOL;
}

$b;
if (isset($b)) {
	echo "DADA";
}

echo gettype($a) . PHP_EOL;
