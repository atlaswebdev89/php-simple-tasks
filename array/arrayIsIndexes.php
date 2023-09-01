<?php
$arr1 = [2, 4, 6, 10, 20, 40, 50, 6, 8, 4, 1, 10, '15' => 111, 34];

$arr2 = [
	'a' => 'red',
	'b' => 'blue',
	'c' => 'green',
	'd' => 'yellow',
	'e' => 'pink',
	'g' => 'red',
	'x' => 'green',
	'1' => 'black',
];

$isIndexArray = function ($list) {
	$indexes = array_keys($list);
	return $indexes;
};

var_dump($isIndexArray($arr1));
