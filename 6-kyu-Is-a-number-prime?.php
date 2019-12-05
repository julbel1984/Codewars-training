<?php

function is_prime(int $n): bool {
    if ($n == 1 || $n == 0 || $n < 0) return false;

    for ($x = 2; $x * $x <= $n; $x++) {
        if ($n % $x == 0)
            return false;
    }

    return true;
}