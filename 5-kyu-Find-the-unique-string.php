<?php

function find_uniq($array) {

    $tempArr = [];

    foreach ($array as $v) {
        $charDuplicate = array_unique(str_split(strtolower($v)));
        sort($charDuplicate);

        $charDuplicateToString = implode('', $charDuplicate);
        $tempArr[$charDuplicateToString][] = $v;
    }

    foreach ($tempArr as $i) {
        if (count($i) === 1) {
            return $i[0];
        }
    }

}