<?php
$s = "Привет мой главный язык программирования";
$d = "hello Wordls";
$arr = str_word_count($s, 1);

print_r($arr);

$count = substr_count($s, 'я');
echo $count . PHP_EOL;
