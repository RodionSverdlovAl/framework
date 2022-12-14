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
    $application::$pager::addJs("templates/1/script.js");
    $application::footer();
}

