<?php

namespace Rlaravel\StrExtends;

/**
 * Class Str
 * @package Rlaravel\StrExtends
 */
class Str
{
    /**
     * @param string $str
     * @param int $start
     * @param int $end
     * @return string
     */
    function mask()
    {
        return function (string $str, $start = 1, $end = 1) {
            $len = strlen($str);

            return substr($str, 0, $start) .
                str_repeat('*', $len - ($start + $end)) .
                substr($str, $len - $end, $end);
        };
    }
}