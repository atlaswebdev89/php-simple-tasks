<?php

$assoc = ["a" => "красный", "b" => "зеленый", "c" => "красный"];

print_r(array_unique($assoc));
$array = [2, 4, 6, 10, 20, 40, 50, 6, 8, 4];
$array = array_unique($array);

sort($array);

$a = function ($list, $val) {
	$start = 0;
	$end = count($list) - 1;
	while ($start <= $end) {
		// нахождение центра массива
		$middle = round(($start + $end) / 2);
		$test = $list[$middle];
		if ($test == $val) {
			return $middle;
		} else if ($test > $val) {
			$end = $middle - 1;
		} else {
			$start = $middle + 1;
		}
	}
	return "Not found";
};

print_r($array);
$resutl = $a($array, 10);
echo $resutl . PHP_EOL;
