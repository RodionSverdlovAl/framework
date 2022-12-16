<?php

namespace Core;

use Core\Type\Request;
use Core\Type\Server;
use Core\Type\Session;

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
}