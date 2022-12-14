<?php
require "Fw/init.php";

use Core\Config;

if (!empty($application)) {
    $application::header();
    $application::$pager::addJs("templates/1/script.js");
    $application::$pager::addJs("templates/1/script2.js");
    $application::$pager::addCss("templates/1/style.css");
    $application::$pager::addJs("templates/1/script3.js");
    $application::$pager::addJs("templates/1/script4.js");
    $application::$pager::addCss("templates/1/style2.css");
    $application::$pager::addCss("templates/1/style3.css");
    $application::$pager::addCss("templates/1/style.css");
    $application::$pager::setProperty("title", "Мой сайт");
    $application::$pager::getProperty("title");
    //$application::$pager::showProperty("jsArray");
    //$application::$pager::showProperty("title");
    $application::$pager::addJs("templates/1/script.js");
    $application::$pager::addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    $application::$pager::addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
    $application::$pager::addString('<meta charset="UTF-8">');
    //$application::$pager::showHead();

    $application::footer();

    print_r(Config::get("db/login"));
}



