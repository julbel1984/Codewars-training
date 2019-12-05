<?php

function solution($str) {
    if (strlen($str) % 2) {
        $str .= "_";
    }
    return str_split($str, 2);
}