<?php

namespace Core;

class Application
{
    public static  $pager = null; // будет объект класса
    private static $template = null; //будет объект класса

    use Singleton;

    function __construct()
    {
        self::$pager = InstanceContainer::get(Page::class);
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