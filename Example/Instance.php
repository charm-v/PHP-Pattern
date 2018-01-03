<?php 
namespace Example;

class Instance
{
    static protected $instance;

    private function __construct()
    {

    }

    static public function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function test()
    {
        echo "I'm test func";
    }
    public function __clone()
    {
        exit('no');
    }
}