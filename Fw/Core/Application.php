<?php

namespace Core;

class Application
{
    private $pager = null; // будет объект класса
    private $template = null; //будет объект класса

    use Singleton;

    private static function startBuffer()
    {
        ob_start();
    }
    private static function endBuffer()
    {
        $content = ob_get_contents();
        ob_end_clean();
        echo $content;
    }

    public static function header()
    {
        self::startBuffer();
        include 'Fw/templates/1/header.php';
    }
    public static function footer()
    {
        include 'Fw/templates/1/footer.php';
        self::endBuffer();
    }
}