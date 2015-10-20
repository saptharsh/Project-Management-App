<?php

require 'config.php';

//using an autoloader. Also, take a look on spl_autoload_register 
/*
 * When the MCV app (index page) loads, it automatically includes all the classes specified in the autoloader 
 */
//The classes are case-sensitive in Unix, but in windows they are not case-sensitive
function __autoload($class){
    require Libs . $class . '.php';
}

$app = new Bootstrap();
?>
