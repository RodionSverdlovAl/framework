<?php

namespace Core\Validation;

abstract class Validator
{
    protected $rule = null; // правило для валидации
    public function __construct($rule)
    {
        $this->rule = $rule;
    }
    abstract public function validate($value):bool;
}