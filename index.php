<?php
require "Fw/init.php";

use Core\Config;

print_r(Config::get("db/login"));

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
    $application::$pager::showProperty("jsArray");
    $application::$pager::showProperty("title");
    $application::$pager::addJs("templates/1/script.js");
    $application::$pager::addString('meta http-equiv="X-UA-Compatible" content="ie=edge"');
    $application::$pager::addString('meta http-equiv="X-RA-Compatible" content="ie=edge"');
    $application::$pager::addString('meta http-equiv="X-PA-Compatible" content="ie=edge"');
    $application::$pager::showHead();

    $application::footer();
}

