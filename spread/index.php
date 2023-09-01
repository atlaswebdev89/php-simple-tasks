<?php

$arr_1 = [
	'a' => 1,
	'b' => 2,
	'Milan',
];

$arr_2 = ['Milan', 'Paris', 'a' => '0'];

$resutl = [...$arr_2, ...$arr_1];
print_r($resutl);
