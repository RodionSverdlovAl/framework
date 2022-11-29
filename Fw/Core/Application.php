<?php

namespace Core;

class Application
{
    private $pager = null; // будет объект класса
    private static $instance = null;
    private $template = null; //будет объект класса

    private function __construct()
    {

    } // закрываем конструктор
    private function __clone()
    {

    }

    public static function getInstance() : Application
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}