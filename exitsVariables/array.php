<?php

$array = [];

if (($array)) {
	echo "EXIST" . PHP_EOL;
} else {
	echo "NO EXIST" . PHP_EOL;
}

$array_1 = [];
if (isset($array_1)) {
	echo "EXIST" . PHP_EOL;
} else {
	echo "NO EXIST" . PHP_EOL;
}


echo gettype($array) . PHP_EOL;
