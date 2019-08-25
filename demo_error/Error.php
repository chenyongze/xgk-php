<?php
class E
{
    public function __construct()
    {
        
    }
    public function error()
    { 
        error_reporting(0);
        set_error_handler([$this,'handle'],E_ALL|E_STRICT);
    }

    public function handle($errno, $errstr, $errfile, $errline)
    {
        echo $errfile;
        print($errno);
        print($errstr);
        print($errline);
    }
}
