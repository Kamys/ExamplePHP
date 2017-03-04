<?php

/*
 * This class use for execute 
 * operation associated with over numbers.
 */

class Calculator {

    public static function add($addends) {
        $sum = 0;
        foreach ($addends as $number) {
            $sum += $number;
        }
        return $sum;
    }

    public static function decrement($minuend, $subtrahend) {
        return $minuend - $subtrahend;
    }

    public static function division($dividend, $divisor) {
        return $dividend / $divisor;
    }

    public static function multiplication($multiplicands, $multiplier) {
        return $multiplicands / $multiplier;
    }

}
