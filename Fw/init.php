<?php
session_start();

function autoloadClasses($class)
{
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $path = __DIR__."/{$class}.php";
    if (is_readable($path)) {
        require $path;
    }

}
spl_autoload_register("autoloadClasses");

define("CORE_CONNECTION", "CORE_CONNECTION", false);
if(!defined("CORE_CONNECTION")){
    die();
}
use Core\Application;
$obj1 = Application::getInstance("key1");
$obj2 = Application::getInstance("key2");


