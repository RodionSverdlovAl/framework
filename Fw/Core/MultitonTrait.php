<?php

namespace Core;

trait MultitonTrait
{
    private static $instance = [];

    public static function getInstance($key) : self
    {
        if (!isset(self::$instance[$key])) {
            self::$instance[$key] = new self($key);
        }
        return self::$instance[$key];
    }

    private function __construct($key)
    {

    } // закрываем конструктор
    private function __clone()
    {

    }
}