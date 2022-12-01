<?php
//класс для работы с настройками

namespace Core;


class Config
{
    private static $configArray = [];

    private static function init(): array
    {
        if (static::$configArray === []) {
            return static::$configArray = require_once(__DIR__ . "/../config.php");
        }
        return static::$configArray;

    }

    public static function get(string $path)
    {
        $data = self::init();
        if (!isset($path)) {
            return $data;
        }
        $group = explode("/", $path);

        for ($i = 0; $i < count($group); $i++) {
            $data = $data[$group[$i]];
        }
        return $data;
    }
}