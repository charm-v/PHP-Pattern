<?php 
class Core
{
    static public $arrClassMap = [];
    
    static public function load($className)
    {
        $strClassPath = replace(CHARM . DIRESEP .$className . EXT);
        if(in_array($className, self::$arrClassMap)) {
            return TRUE;
        }else {

            if(is_file($strClassPath)) {
                require_once $strClassPath;
                self::$arrClassMap[$className] = $className;
            }else {
                throw new \Exception("找不到类 -- " . $className);
            }
        }
    }
}