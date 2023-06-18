#!/usr/bin/env php
<?php
$i = 0;
// бескoнечный цикл на for
for (; ;) :
    sleep(1);
    echo ($i = $i + 1) . PHP_EOL;
endfor;
