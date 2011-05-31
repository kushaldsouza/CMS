<?php
// define apps root directory
define("CMS_ROOT_DIR", realpath(dirname(__FILE__) . '/../') . '/');
 
// dump function (or if you have xdebug you can just use var_dump)
function dump($item, $die=true)
{
    $printString = '<pre>' . print_r($item, true) . '</pre>';
    if($die)
        die($printString);
    else
        echo $printString;
}

// dispatch file in here
require(CMS_ROOT_DIR . 'system/dispatch.php'); 
dispatch();

?>