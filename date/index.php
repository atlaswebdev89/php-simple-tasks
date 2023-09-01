<?php

try {
	$date = "2023-12-10";
	$date = date('d-m-Y', strtotime($date));
	$curDate = date('d-m-Y');
	if ($date < $curDate) {
		echo "hello";
	}

	$date = strtotime("1989/01/11");

	echo gettype($date) . PHP_EOL;

	$today = getdate($date);
	print_r($today);

	echo date('d-m-Y', $today[0]) . PHP_EOL;



	$data = strtotime("+1 week", strtotime("1989-01-11"));
	echo $data;
	exit;


	$b = 6 % 7;
	echo $b . PHP_EOL;
	// echo (6 % 7) . PHP_EOL;

	$data = new DateTime('2019-06-31');
	echo $data->format('w') . PHP_EOL;


	exit(0);
	$new_diff = new DateInterval('P1M6D');
	print_r($new_diff);
	$data->add($new_diff);


	print_r($data);

	$sheldon = new DateTime('May 20th, 1980');
	$neo     = new DateTime('March 11th, 1962');
	print_r($sheldon);
	print_r($neo);
	if ($sheldon > $neo) {
		echo 'Sheldon is younger than neo';
	}


	$diff = $sheldon->diff($neo);
	print_r($diff);


	print_r(getdate());
} catch (Exception $e) {
	echo $e->getMessage();
}
