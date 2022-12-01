<?php
session_start();
use Core\Application;
function autoloadClasses($class)
{
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $path = __DIR__."/{$class}.php";
    if (is_readable($path)) {
        require $path;
    }

}

spl_autoload_register("autoloadClasses");

$obj1 = Application::getInstance("key1");
$obj2 = Application::getInstance("key2");


