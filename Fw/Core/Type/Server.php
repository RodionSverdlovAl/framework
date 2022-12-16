<?php

namespace Core\Type;

use Core\Singleton;

class Server extends Dictionary
{
    use Singleton;
    public function __construct($readonly = true)
    {
        parent::__construct($_SERVER, $readonly);
    }
}