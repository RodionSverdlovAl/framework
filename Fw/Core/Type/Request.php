<?php

namespace Core\Type;

use Core\Singleton;

class Request extends Dictionary
{
    use Singleton;
    public function __construct($readonly = true)
    {
        parent::__construct($_REQUEST, $readonly);
    }

}