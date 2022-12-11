<?php

namespace Core;

trait Singleton
{
    private static $instance;

    public static function getInstance() : self
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    private function __clone()
    {

    }
}