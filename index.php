<?php 

define('EXT', '.php');
define('DIRESEP', DIRECTORY_SEPARATOR);
define('CHARM', str_replace(array('/', '\\'), DIRESEP, dirname(__FILE__)));

function replace($subject, $search = ['/', '\\'], $replace = DIRESEP)
{
    return str_replace($search, $replace, $subject);
}

require_once "Core.php";
spl_autoload_register('Core::load');


$instance = \Example\Instance::getInstance();
$instance->test();
echo "<br>";

$fanctory = \Example\Fanctory::creatInstance();
var_dump($fanctory);


