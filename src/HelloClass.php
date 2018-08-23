<?php

namespace Hello;
require_once '../vendor/autoload.php';

class MyClass
{
    static function printInfo()
    {
        $curl = new Curl\Curl();
        $curl->get('http://www.example.com/');
        var_dump($curl->response);
    }
}


