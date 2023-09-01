<?php

$basic = [
  [
    'code' => 1,
  ],
  [
    'code' => 2,
  ],
  [
    'code' => 3,
  ],
];

foreach ($basic as $k => $item) {
    if ($item['code'] === 2) {
        $arrayResult = array_splice($basic, $k, 1);
        $basicResult = array_merge($arrayResult, $basic);
    }
}