<?php 

namespace Example;

class Fanctory
{
    static public function creatInstance()
    {
        $instance = \Example\Instance::getInstance();

        return $instance;
    }


    static public function createDb()
    {
        // $db = new Db();
        // return $db;
    }
}
