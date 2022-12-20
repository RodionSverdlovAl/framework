<?php

namespace Core;

use Core\Type\Request;
use Core\Type\Server;
use Core\Type\Session;
use Exception;

class Application
{
    public static  $pager = null; // будет объект класса
    private static $template = null; //будет объект класса

    private static $request = null;
    private static $server = null;
    private static $session = null;

    use Singleton;

    function __construct()
    {
        self::$pager = InstanceContainer::get(Page::class);
        self::$request = InstanceContainer::get(Request::class);
        self::$server = InstanceContainer::get(Server::class);
        self::$session = InstanceContainer::get(Session::class);
    }

    private static function startBuffer() : void
    {
        ob_start();
    }
    private static function endBuffer() : void
    {
        $content = ob_get_contents();
        ob_end_clean();
        $content = self::$pager::getAllReplace($content);
        echo $content;
    }

    public static function header() : void
    {
        self::startBuffer();
        include 'Fw/templates/1/header.php';
    }
    public static function footer() : void
    {
        include 'Fw/templates/1/footer.php';
        self::endBuffer();
    }

    private static array $componentClasses = []; // массив подключенных классов компонента
    public static function includeComponent(string $component, string $template, array $params, array $content)
    {
        $componentInfoArray = explode(':', $component);
        $namespace = $componentInfoArray[0];
        $component_id = $componentInfoArray[1];
        $path = "/components/" . str_replace(":","/",$component);

        if(!isset(self::$componentClasses[$component])) {
            try {
                $class = self::$server->get('DOCUMENT_ROOT') . "Fw" . $path . "/.class.php";
                if(file_exists($class)){
                    self::$componentClasses[$component] = self::makeCorrectClassName($component_id);
                    include $class;
                } else {
                    throw new Exception("Не удалось найти файл!");
                }
            }catch (Exception $e){
                echo $e . "</br>";
            }
        }

        echo "<pre>";
        echo print_r(self::$componentClasses, true);
        echo "</pre>";

        if($content != []) {
            $result = $content;
        } else {
            $result = [];
        }

        $obj = new self::$componentClasses[$component]($result, $component_id, $template, $params, $path);
        $obj->executeComponent();
    }

    private static function makeCorrectClassName($str) : string  // эта функция переводит  element.list в ElementList
    {
        $correctName = "";
        foreach (explode('.',$str) as $item) $correctName .= ucfirst($item);
        return $correctName;
    }
}