<?php

namespace Core;

class Page
{
    use Singleton;
    private static array $pagePropertiesArray = [
      "jsArray" => [],
      "cssArray" => [],
      "strArray" => []
    ];


    public static function addJs(string $src) //добавляет src в массив сохраняя уникальность
    {
        if (!isset(self::$pagePropertiesArray["jsArray"])) {
            self::$pagePropertiesArray["jsArray"][] ="<script src=\"$src\"></script>";
        } else {
            // если массив не пустой тогда проходим по всем элементам и смотрим есть такой уже или нет
            $flag = false;
            foreach (self::$pagePropertiesArray["jsArray"] as $item) {
                if ($item === "<script src=\"$src\"></script>") {
                    $flag = true;
                }
            }
            if ($flag === false) {
                self::$pagePropertiesArray["jsArray"][] = "<script src=\"$src\"></script>";
            }
        }
    }

    public static function addCss(string $link) //добавляет link сохраняя уникальность
    {
        if (!isset(self::$pagePropertiesArray["cssArray"])) {
            self::$pagePropertiesArray["cssArray"][] ="<link href=\"$link\" rel=\"stylesheet\">";
        } else {
            // если массив не пустой тогда проходим по всем элементам и смотрим есть такой уже или нет
            $flag = false;
            foreach (self::$pagePropertiesArray["cssArray"] as $item) {
                if($item === "<link href=\"$link\" rel=\"stylesheet\">") {
                    $flag = true;
                }
            }
            if ($flag === false) {
                self::$pagePropertiesArray["cssArray"][] = "<link href=\"$link\" rel=\"stylesheet\">";
            }
        }
    }

    public static function addString(string $str) // добавляет в массив для хранения
    {
        if (!isset(self::$pagePropertiesArray["strArray"])) {
            self::$pagePropertiesArray["strArray"][] =$str;
        } else {
            // если массив не пустой тогда проходим по всем элементам и смотрим есть такой уже или нет
            $flag = false;
            foreach (self::$pagePropertiesArray["strArray"] as $item) {
                if ($item === $str) {
                    $flag = true;
                }
            }
            if ($flag === false) {
                self::$pagePropertiesArray["strArray"][] = $str;
            }
        }
    }

    public static function setProperty(string $id, $value) // добавляет для хранение значение по ключу
    {
        self::$pagePropertiesArray["$id"] = $value;
    }

    public static function getProperty(string $id) // получение по ключу
    {
        echo self::$pagePropertiesArray["$id"];
    }

    public static function showProperty(string $id) // выводит макрос для будущей замены #FW_PAGE_PROPERY_{$id}#
    {
        echo "#FW_PAGE_PROPERY_$id#";
    }
    public static function getMacros(string $id) { // просто возвращает макрос
        return "#FW_PAGE_PROPERY_$id#";
    }

    public static function getAllReplace($pageHTML) // получает массив макросов и значений для замены
    {
        foreach (self::$pagePropertiesArray as $id => $items) {
            if (is_array($items)) {
                $pageHTML = str_replace(self::getMacros($id), implode($items), $pageHTML);
            } else {
                $pageHTML = str_replace(self::getMacros($id), $items, $pageHTML);
            }
        }
        return $pageHTML;
    }

    public static function showHead() // выводит 3 макроса замены CSS / STR / JS
    {
        self::showProperty("jsArray");
        self::showProperty("cssArray");
        self::showProperty("strArray");
    }
}