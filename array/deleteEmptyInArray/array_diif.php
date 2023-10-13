<?php


$array = [
  123, null, ' ', 'name', false, 'date'
];

/**
 * Убрать все null false и пустые значения
 */

$result = array_diff($array, [false], [' ']);
print_r($result);