<?php

namespace Core;

class InstanceContainer
{
    private static array $instances = [];
    static public function get($class)
    {
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = $class::getInstance();
        }
        return self::$instances[$class];
    }

}