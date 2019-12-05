<?php

function expanded_form(int $n) {
    $res = [];
    $divider = 10;

    while ($divider < $n) {
        $temp = $n % $divider;
        if ($temp != 0) {
            array_unshift($res, $temp);
        }
        $n -= $temp;
        $divider *= 10;
    }
    array_unshift($res, $n);

    return implode(' + ', $res);
}