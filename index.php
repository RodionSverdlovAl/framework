<?php
require "Fw/init.php";

use Core\Config;

print_r(Config::get("db/login"));

if (!empty($application)) {
    $application::header();
    $application::footer();
}

