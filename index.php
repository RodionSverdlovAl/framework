<?php
require "Fw/init.php";

use Core\Config;

if (!empty($application)) {
    $application->header();
    $application::$pager::addJs("templates/1/script.js");
    $application::$pager::addJs("templates/1/script2.js");
    $application::$pager::addCss("templates/1/style.css");
    $application::$pager::addJs("templates/1/script3.js");
    $application::$pager::addJs("templates/1/script4.js");
    $application::$pager::addCss("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    $application::$pager::addCss("templates/1/style3.css");
    $application::$pager::addCss("templates/1/style.css");
    $application::$pager::showProperty("jsArray");
    $application::$pager::addJs("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js");
    $application::$pager::addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">');
    $application::$pager::addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
    $application::$pager::addString('<meta charset="UTF-8">');
    $application::$pager::setProperty("title", "История изменений проекта");


    //public static function includeComponent(string $component, string $template, array $params)
    $application->includeComponent(
        'fw:element.list', // неймспейс:компонент
        'default', // шаблон
        [ "sort" => "id", "limit" => 3, "show_title" => "N" ] // params
    );
    $application->includeComponent(
        'fw:interface.form',
        'default',
        [
            'additional_class' => 'window--full-form', //доп класс на контейнер
            'attr' => [ // доп атрибуты
                    'data-form-id' => 'form-123'
            ],
            'method' => 'post',
            'action' => '', //url отправки
            'elements' => [ //список элементов формы
                [
                    'type' => 'text',
                    'name' => 'login',
                    'additional_class' => 'js-login',
                    'attr' => [
                        'data-id' => '17'
                    ],
                    'title' => 'Логин',
                    'default' => 'Введите имя'
                ],
                [
                    'type' => 'password',
                    'name' => 'password',
                    'title' => 'пароль'
                ],
                [
                    'type' => 'select',
                    'name' => 'server',
                    'additional_class' => 'js-login',
                    'attr' => [
                        'data-id' => '17'
                    ],
                    'title' => 'Выберите сервер',
                    'list' => [
                        [
                            'title' => 'Онлайнер',
                            'value' => 'onliner',
                            'additional_class' => 'mini--option',
                            'attr' => [
                                'data-id' => '188'
                            ],
                            'selected' => true
                        ],
                        [
                            'title' => 'Тутбай',
                            'value' => 'tut',
                        ]
                    ]
                ],
                [
                    'type' => 'checkbox',
                    'name' => 'login',
                    'additional_class' => 'js-login',
                    'attr' => [
                        'data-id' => '17'
                    ],
                    'title' => 'Логин'
                ],
            ]
        ]
    );

    echo "<pre>";
    echo "
    -------- 20 Декабря 2022 --------
    1) Закончил 3 этап сделал Base Template DataBaseHandler и .class.php
     -------- 15 Декабря 2022 --------
    1) Закончил с классом Page
    -------- 14 Декабря 2022 --------
    1) добавил функции addJs и addCss в класс Page
    2) добавил функции addString, setProperty, getProperty, showProperty,
     -------- 11 Декабря 2022 --------
    1) Add buffer in class Application.php
    2) поправил код
    -------- 10 Декабря 2022 --------
    1) Add singleton trait and add InstanceContainer.php class
    -------- 1 Декабря 2022 --------
    1) Add MultitonTrait.php and remake Application.php
    2) Add first templates
    -------- 24 Ноября 2022 --------
    1) start progect
    2) Add getInstance method
    3) Add autoload
    4) Add Config class get method
    ";

    echo "</pre>";

    $application->footer();

    print_r(Config::get("db/login"));
}



