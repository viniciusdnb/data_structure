<?php

interface InterfaceConsole
{
    public function __construct();
    /*
        function startConsole 
        abstract class function
     */
    public function startConsole():void;

    /*
        mandatory functions for, which will be created in the child object of the console object
    */
    public function presentation():void;
    public function remove():void;
    public function setMenu():void;
    public function print():void;
}
