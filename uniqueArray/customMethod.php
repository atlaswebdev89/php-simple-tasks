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

$unique = function ($list, $index = false) {
	if (!empty($list)) {
		$result = [];
		foreach ($list as $key => $value) {
			if (!in_array($value, $result)) {
				($index) ? $result[$key] = $value : $result[] = $value;
			}
		}
		if (!empty($result)) {
			return $result;
		}
		return "Not found";
	}
};

$result = $unique($arr1);
$result2 = $unique($arr2, TRUE);

print_r($result);
print_r($result2);
