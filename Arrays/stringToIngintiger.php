<?php 

function myAtoi(string $s): int
{
    $i = 0;
    $n = strlen($s);
    $sign = 1;
    $num = 0;

    $INT_MAX = 2147483647;
    $INT_MIN = -2147483648;

    // 1. Ignore leading whitespaces
    while ($i < $n && $s[$i] === ' ') {
        $i++;
    }

    // 2. Check sign
    if ($i < $n && ($s[$i] === '+' || $s[$i] === '-')) {
        if ($s[$i] === '-') {
            $sign = -1;
        }
        $i++;
    }

    // 3. Convert digits
    while ($i < $n && ctype_digit($s[$i])) {
        $digit = intval($s[$i]);

        // 4. Check overflow BEFORE adding digit
        if ($num > intdiv($INT_MAX - $digit, 10)) {
            return $sign === 1 ? $INT_MAX : $INT_MIN;
        }

        $num = $num * 10 + $digit;
        $i++;
    }

    return $sign * $num;
}
