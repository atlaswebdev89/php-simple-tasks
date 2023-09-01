<?php

namespace App;

class Command
{

    public $telegram;
    public $storage;
    public $message;

    public function __construct(object $currentObject, $storage, $message)
    {
        $this->telegram = $currentObject;
        $this->storage  = $storage;
        $this->message  = $message;
    }

    public function execute()
    {
        echo "Execute current command " . __CLASS__ . PHP_EOL;
    }
}

class MyCommand extends Command
{

    public $telegram;
    public $storage;

    public function __construct($currentObject, $storage, $message)
    {
        parent::__construct($currentObject, $storage, $message);
    }

    public function execute()
    {
        echo "Execute my command  " . __CLASS__ . PHP_EOL;
        echo $this->message . PHP_EOL;
    }

    public function arrow()
    {
        $this->telegram->test();
    }
}

/**
 *
 */
class MyNewClass
{
    protected $name = 'Petr';

    /**
     * @return mixed|string
     */
    final public function getName(): string
    {
        return $this->name;
    }
}

/**
 * What the hell
 *
 * @package Telegram
 */
class Telegram
{
    public $commands = [];

    /**
     * What the hell
     *
     * @param $ClassName bla bla
     *
     * @return mixed
     */
    public function createCommand(string $ClassName)
    {
        /**
         * @todo добавить проверку существования указаного класса
         */
        if (class_exists($ClassName)) {
            $a = new $ClassName(
                $this,
                $this->getStorage(),
                $this->getMessage()
            );

            return $a;
        } else {
            throw  \Exception("Not found class");
        }
    }

    /**
     * Wath bla bla
     *
     * @return string bla bla
     */
    public function getStorage()
    {
        return "Staorage";
    }

    public function test()
    {
        echo "Это функция вызывается из другого класса " . __CLASS__ . PHP_EOL;
    }

    public function addCommand($command, $className = null)
    {
        if (is_array($command)) {
            foreach ($command as $key => $class) {
                $this->commands[$key] = $class;
            }
        } else {
            $this->commands[$command] = $className;
        }
    }

    public function addCommands($command, $className = null)
    {
        if (is_array($command)) {
            foreach ($command as $key => $class) {
                $this->commands[$key] = $class;
            }
        }
    }

    public function getMessage()
    {
        return 'New Message';
    }

    public function getCommand()
    {
        return 'start';
    }

    public function run()
    {
        // Получаем данные
        $command = $this->getCommand();
        $command = trim($command);
        if (array_key_exists($command, $this->commands)) {
            $handler = $this->createCommand($this->commands[$command]);
            /**
             * @todo добавить проверку сущестрования указаного метода
             */
            $handler->execute();
        }
    }
}

$b = new Telegram();
// Одна команда
$b->addCommand('start', MyCommand::class);
// Две команды
$b->addCommands([
    'finish' => MyCommand::class,
]);
$b->run();
