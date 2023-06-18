<?php

$array = array(145, 3, 4, 2, 6, 8, 9, 16, 14, 25, 12, 512, 6124, 12, 31, 5, 123, 6, 1, 5, 23, 4, 1, 6, 12, 5, 154);

for ($i = 0; $i < count($array) - 1; $i++) {
	for ($j = 0; $j < count($array) - 1 - $i; $j++) {
		$elem = $array[$j];
		$next = $array[$j + 1];
		if ($elem > $next) {
			$array[$j + 1] = $elem;
			$array[$j] = $next;
		}
	}
}
print_r($array);
