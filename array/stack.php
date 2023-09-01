<?php

$stack = [];

$stack[] = "start";
array_unshift($stack, "stop");

print_r($stack);

array_unshift($stack, "pause");
print_r($stack);

class ReadingList
{
	protected $stack;
	protected $limit;

	public function __construct($limit = 10)
	{
		$this->stack = array();
		$this->limit = $limit;
	}
	public function push($item)
	{
		if (count($this->stack) < $this->limit) {
			array_unshift($this->stack, $item);
		} else {
			throw new RunTimeException('Stack is full!');
		}
	}
	public function pop()
	{
		if ($this->isEmpty()) {
			throw new RunTimeException('Stack is empty!');
		} else {
			return array_shift($this->stack);
		}
	}
	public function top()
	{
		return current($this->stack);
	}
	public function isEmpty()
	{
		return empty($this->stack);
	}
}

$st = new ReadingList();

$st->push('start');

print_r($st);


$stack = new SplStack();

// добавляем элемент в стек
$stack->push('1');
$stack->push('2');
$stack->push('3');


$result = $stack->serialize() . PHP_EOL; // i:6;:s:1:"1";:s:1:"2";:s:1:"3";

print_r($result);
$stack->unserialize($result);
// извлекаем элементы из стека
echo $stack->pop() . PHP_EOL; // 3
echo $stack->pop() . PHP_EOL; // 2
echo $stack->pop() . PHP_EOL; // 1

print_r($stack);
