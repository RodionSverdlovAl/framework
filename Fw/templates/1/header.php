<!doctype html>
<html lang="en">
<head>
    <?php
     use Core\Application;
     Application::getInstance()::$pager::showHead();
     ?>
    <title>
        <?php
            Application::getInstance()::$pager::showProperty("title");
        ?>
    </title>
</head>
<body>
    <header>
        <p>Я шапка сайта!</p>
    </header>
