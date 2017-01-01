<?php

namespace pillax;

class validator {

	// test
    public static function validate($value, $rule) {
        if( ! method_exists('self', $rule)) {
            throw new \Exception('Invalid validation rule!');
        }

        return self::$rule($value);
    }

    public static function isNumeric($value) {
        return is_numeric($value);
    }

    public static function isFloat($value) {
        return is_float($value);
    }

    public static function isString($value) {
        return is_string($value);
    }

    public static function isTest($value) {
        return true;
    }
}