<?php


abstract class Console
{
    public array $inputStr = [];
      
    

    function startConsole()
    {
        
        $this->presentation();
        $i = 0;

        while (true) {
            $str = rtrim(readline(">"));
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

    function presentation()
    {
        echo "----------- STACK OF BOOKS --------------- \n";
        echo "TYPE BOOK NAME AND ENTER OR MENU OPTION\n";
        foreach($this->menu as $value){
            echo $value . "\n";
        }
    }
    
}
