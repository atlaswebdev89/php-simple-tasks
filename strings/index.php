<?php

$str = "hello world ✅";
$pos = strpos($str, "✅");
echo $str . PHP_EOL;
$sub = substr($str, 0, $pos);
echo $sub . PHP_EOL;
