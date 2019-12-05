<?php

function camel_case(string $s) {
    return str_replace(' ', '',
        ucwords(str_replace('', ' ', $s)));
}
