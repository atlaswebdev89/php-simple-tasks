<?php

$a = 0;
if(empty($a)) echo "NULL";
exit;
$arr = [
  '9:00-13:00',
  '13:30-16:30',
  '17:00-19:00',
];

$serialize = serialize($arr);
var_dump($serialize);

$result = unserialize($serialize);


if(is_array($result) && !empty($result)) {
    $arrString = createFullString($result);
}

var_dump($arrString);
function createFullString (array $timeDelivery):array {
    $result = [];
        foreach ($timeDelivery as $item) {
//            $temp = explode('-', $item);
//            $result [] = 'C '.$temp[0].' До '.$temp[1];

            $temp = 'C '. str_replace('-', ' До ', $item);
            $result [] = $temp;

        }
        return $result;
}

var_dump(unserialize($serialize));