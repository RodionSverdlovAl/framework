<?php

namespace Core\Type;

use Core\Singleton;

class Session extends Dictionary
{
    use Singleton;
    public function __construct($readonly = true)
    {
        parent::__construct($_SESSION, $readonly);
    }
}