<?php
$uniqid = "ENVIROMENTS";
putenv("UNIQID=$uniqid");

echo getenv("UNIQID") . PHP_EOL;
echo getenv("PATH") . PHP_EOL;

const AJAX = "START";
// define("AJAX", "START");

if (defined('AJAX')) echo "SGOOF" . PHP_EOL;

$var = defined("AJAX") || "ASD";
echo gettype($var) . PHP_EOL;
echo $var . PHP_EOL;
