<?php

namespace Core\Services;

use Core\Singleton;

class DatabaseHandler
{
    use Singleton;
    private static array $items;

    public function __construct()
    {
        if(file_exists(__DIR__ . '/db.json')){
            return self::$items = json_decode(file_get_contents(__DIR__ . '/db.json'), true);
        }else{
            return self::$items = [];
        }
    }

    public static function getItems()
    {
        return self::$items;
    }
}