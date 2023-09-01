<?php

// Развернуть многомерный массив  
$arr_1 = [
	'a' => [
		'c' => [
			'd' => 2,
			'e' => 3,
			'a' => 'a',
		],
		'g' => 21,
		'r' => 12,
		'a' => 'cb',
		[
			'a' => 'eb',
		],
	],
	'x' => 100
];

function expandArray($array)
{
	$result = [];
	foreach ($array as $key => $item) {
		if (is_array($item)) {
			$arrayResult = expandArray($item);
			// $result +=  $arrayResult;
			$result = array_merge($result, $arrayResult);
		} else {
			$result[$key] = $item;
		}
	}
	return $result;
}

$data = expandArray($arr_1);
print_r($data);
