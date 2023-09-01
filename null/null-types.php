<?php

declare(strict_types=1);

function testReturn(): ?string
{
	return 'elePHPant';
}

var_dump(testReturn());

function testReturn2(): ?string
{
	return null;
}

var_dump(testReturn2());

function test(?string $name)
{
	var_dump($name);
}

test('elePHPant');
test(null);
$a;
test($a);
test();
