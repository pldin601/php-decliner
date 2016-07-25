<?php

namespace RG\Libs\Decliner;

function decline($number, array $titles)
{
    $cases = array (2, 0, 1, 1, 1, 2);
    return $number . " " . $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
}

function make(array $titles)
{
    return function ($number) use ($titles) {
        return decline($number, $titles);
    };
}
