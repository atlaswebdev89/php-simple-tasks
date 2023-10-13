<?php

$homedir = "/home/apollon/web";
$fileJs = "/home/apollon/web/js/async/async.js";

if(is_dir($homedir)) chdir($homedir);
$dirs = glob("*");
$stdout = fopen("php://stdout", 'w');
$url = fopen("https://daniart.by", 'r');
$i = 10;
$string = [];
while ($i > 0 && !feof($url)) {
    $string[]= fgets($url);
    $i--;
}
fclose($url);
//print_r($string);
fwrite($stdout, PHP_EOL."Count dirs in ".$homedir.": ". count($dirs).PHP_EOL);

if(file_exists($fileJs)) {
    echo PHP_EOL;
    readfile($fileJs);
    echo PHP_EOL;
}
