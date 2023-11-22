<?php

include "InterfaceConsole.php";

abstract class Console implements InterfaceConsole
{
    public array $inputStr = [];

    function startConsole():void
    {

        $this->presentation();
        $i = 0;

        while (true) {
            //var_dump($this->inputStr);
            $str = trim(readline(">"), " ");
            if (!is_numeric($str)) {
                $this->inputStr[$i] = $str;
            }
            $i++;

            if ($str == 0) {
                echo "goodbye!";
                break;
            }

            foreach ($this->arrOptions as $key => $value) {
                if ($key == $str) {
                    $this->$value();
                }
            }
        }
    }
}


