<?php
$name = "Tom";
$age = 36;
$s = <<< USER
Name = $name
Age = $age
USER;
echo $s . PHP_EOL;
