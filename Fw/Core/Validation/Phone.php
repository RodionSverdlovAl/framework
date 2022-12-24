<?php

namespace Core\Validation;

class Phone extends RegExp
{
    public function __construct($rule = '/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/')
    {
        parent::__construct($rule);
    }
}