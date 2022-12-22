<?php

namespace Core\Validation;

class RegExp extends Validator
{
    public function __construct($rule)
    {
        parent::__construct($rule);
    }

    function validate($value): bool
    {
        return preg_match($this->rule, $value);
    }
}