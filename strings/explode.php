<?php

$str = "hello";
$s = "Привет";
$arrStr = explode(' ', $str);
print_r($arrStr);
print_r(str_split($str));
print_r(mb_str_split($s));

$arrWords = mb_str_split($s);

$word = implode('', $arrWords);
echo $word . PHP_EOL;

echo $str[0] . PHP_EOL;
$first = mb_substr($s, 0, 1);
echo mb_strtolower($first) . PHP_EOL;
