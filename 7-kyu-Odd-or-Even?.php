<?php

function odd_or_even(array $a) {
    if (array_sum($a) % 2 != 0) {
        return 'odd';
    } else {
        return 'even';
    }
}
