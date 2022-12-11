<?php

namespace Core;

class Page
{
    use Singleton;

    public static function addJs(string $src) //добавляет src в массив сохраняя уникальность
    {

    }

    public static function addCss(string $link) //добавляет link сохраняя уникальность
    {

    }

    public static function addString(string $str) // добавляет в массив для хранения
    {

    }

    public static function setProperty(string $id, mixed $value) // добавляет для хранение значение по ключу
    {

    }

    public static function getProperty(string $id) // получение по ключу
    {

    }

    public static function showProperty(string $id) // выводит макрос для будущей замены #FW_PAGE_PROPERY_{$id}#
    {

    }

    public static function getAllReplace() // получает массив макросов и значений для замены
    {

    }

    public static function showHead() // выводит 3 макроса замены CSS / STR / JS
    {

    }
}