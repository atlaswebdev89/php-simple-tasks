<?php

$var = "style";

class News
{
	public $attr = "code";

	public function getAttr()
	{
		return $this->attr;
	}
}

$b = new News();
$serial = serialize($b);

echo $serial . PHP_EOL;

$obj = unserialize($serial);
$json = json_encode($b);
$c = json_decode($json);
print_r($c);
echo $c->getAttr() . PHP_EOL;
echo $obj->getAttr() . PHP_EOL;
