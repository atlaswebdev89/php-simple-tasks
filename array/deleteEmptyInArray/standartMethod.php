<?php

$array = [
  123, null, '   ', 'name', false, 'date'
];

$result = [];
foreach ($array as $key => $item) {
    if (trim($item)) {
        $result [$key] = $item;
    }
}

print_r($result);

$result2 = array_filter($array, function ($item) {
        return (trim($item));
});
print_r($result2);


/**
 *
 * @param  array  $arr
 *
 * @return array|void
 */
function deleteNullValue (array $arr) {

    if(is_array($arr) && count($arr)) {
        $result  = $arr;
        foreach ($arr as $key => $item) {
            if(! trim($item)) {
                array_splice($result, $key, 1);
            }
        }
        return $result;
    }
}

$arrAy = deleteNullValue($array);

print_r($arrAy);
