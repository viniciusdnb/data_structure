<?php

include "Console.php";

class ex2_queuePerson extends Console
{
    public array $arrOptions = [1 => "print", 2 => "remove"];
    public array $menu;

    public function __construct()
    {
        $this->setMenu();
        Console::startConsole();
    }

    public function presentation(): void
    {
        echo "---------QUEUE OF PERSON------------ \n";
        echo "CREATE A QUEUE OF PERSON AND THEN START REMOVING \n";
        foreach ($this->menu as $value) {
            echo $value . "\n";
        }
    }

    public function setMenu(): void
    {
        $this->menu = [
            0 => "0. exit",
            1 => "1. print queue",
            2 => "2. remove first person",
        ];
    }

    public function print(): void
    {
        if (count($this->inputStr) == 0) {
            echo "It is not possible to print the queue is empty \n";
            return;
        }

        foreach ($this->inputStr as $key => $person) {
            echo  $person . "\n";
        }
    }

    public function remove(): void
    {
        if (count($this->inputStr) == 0) {
            echo "It is not possible to remove the queue, it is empty \n";
            return;
        }

        array_shift($this->inputStr);
        $arr = $this->inputStr;
        unset($this->inputStr);
        $newArr = [];
        $i = 0;

        foreach ($arr as $value) {
            $newArr[$i] = $value;
            $i++;
        }

        $this->inputStr = $newArr;
    }
}

$ex = new Ex2_queuePerson();
