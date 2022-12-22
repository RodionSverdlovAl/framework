<?php

namespace Core\Validation;

class Number extends Validator
{

    public function __construct($rule = null)
    {
        parent::__construct($rule);
    }

    public function validate($value): bool
    {
        return is_numeric($value);
    }
}