<?php
$arr1 = [2, 4, 6, 10, 20, 40, 50, 6, 8, 4, 1, 10, 111];

$arr2 = [
	'a' => 'red',
	'b' => 'blue',
	'c' => 'green',
	'd' => 'yellow',
	'e' => 'pink',
	'g' => 'red',
	'x' => 'green',
];
//array_unique убирает дубли но не делает переиндексацию т.е. ключи идут не по порядку

$result = array_unique($arr2);
$result2 = array_unique($arr1);

print_r($result2);
print_r($result);
