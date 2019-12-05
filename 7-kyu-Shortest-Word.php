<?php

function findShort(string $str) {

    $words = explode(' ', $str);
    foreach ($words as $word) {
        $words[$word] = strlen($word);
    }

    return asort($words);
}
