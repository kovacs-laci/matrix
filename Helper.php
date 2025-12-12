<?php

class Helper
{
    static function isEven($number): bool
    {
        if ($number == 0) {
            return false;
        }

        return $number % 2 == 0;
    }

    static function isPrime(int $number): bool
    {
        return true;
    }
}