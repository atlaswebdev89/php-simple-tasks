<?php


class ConstClass
{
    public const PI = 3.14;

    protected const DI = 'DI';

    private const EVENTS = 'EVENTS';

    private string $myString = "Mystring";
    public static function events () {
        echo self::EVENTS.PHP_EOL;
    }
}


class ConstsClass2 extends ConstClass
{


    public string $myString = "New mystring";
    public const START = "START";

    public const DI = "di";
    public static function test()
    {
        echo self::DI.PHP_EOL;
        echo parent::DI.PHP_EOL;
    }
}


echo ConstClass::PI.PHP_EOL;

echo ConstClass::events().PHP_EOL;
echo ConstsClass2::test();

$myy = new ConstsClass2();
echo $myy->myString;