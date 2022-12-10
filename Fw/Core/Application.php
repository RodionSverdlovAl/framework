<?php

namespace Core;

class Application
{
    private $pager = null; // будет объект класса
    private $template = null; //будет объект класса

    use Singleton;

    public function check(){
        echo "Работает";
    }

}