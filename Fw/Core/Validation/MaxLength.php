<?php

namespace Core\Validation;

class MaxLength extends Validator
{
    public function __construct($rule)
    {
        parent::__construct($rule);
    }

    public function validate($value): bool
    {
        // TODO: Implement validate() method.
        if (is_array($value)) {
            return count($value) <= $this->rule;
        } else {
            return mb_strlen($value) <= $this->rule; // проверяем чтобы длинна нашего значения была равна или больше правила
        }
    }
}