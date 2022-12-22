<?php

namespace Core\Validation;

class Chain extends Validator
{
    public function __construct($rule)
    {
        parent::__construct($rule);
    }

    function validate($value): bool
    {
        // TODO: Implement validate() method.
        $result = false;
        foreach ($this->rule as $validator) {
            if (!($validator instanceof Validator)) {
                continue;
            }
            if (! $result = $validator->validate($value)) {
                break;
            }
        }
        return $result;
    }
}