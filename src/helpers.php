<?php

if (!function_exists('str_mask')) {

    /**
     * @param string $str
     * @param int $start
     * @param int $end
     * @return string
     */
    function str_mask(string $str, $start = 1, $end = 1)
    {
        return \Illuminate\Support\Str::mask($str, $start, $end);
    }
}
