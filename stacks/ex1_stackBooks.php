<?php

include "Console.php";



class Ex1_stackBooks extends Console
{

    public array $arrOptions = [1 => "print", 2 => "remove"];
    public array $menu;

    public function __construct()
    { 
        $this->setMenu();
        Console::startConsole();
     
    }

    public function remove():void
    {         
        if( $this->statusStack()){
            array_pop($this->inputStr); 
        }
         
    }

    private function statusStack(): bool
    {
        if(count($this->inputStr) == 0){
            echo "Cannot remove or print, empty battery! \n";
            return false;
        }else{
            return true;
        }
    }

    public function print():void
    {
        
        if($this->statusStack()){
            foreach($this->inputStr as $books){
                echo $books . "\n";
            }
        }
    }
       

    private function setMenu():void
    {
        $this->menu = [
            0 => "0. exit",
            1 => "1. print stack",
            2 => "2. remove element",
        ];
    }
}

$ex = new Ex1_stackBooks();
//$ex->print();
//$ex->pushStackBooksPair(10, "harry");
//$ex->pushStackBooksPair(2, "odisseia");