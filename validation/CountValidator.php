<?php

namespace validation;

class CountValidator implements Validator
{
    public static function validate($input): bool
    {
        return NumberValidator::validate($input) && (int)$input !== 0;
    }
}