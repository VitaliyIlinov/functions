<?php
//17. рекурсия факториал числа

function factorial($x)
{
    if ($x === 0) {
        return 1;
    } else return $x * factorial($x - 1);
}

echo factorial(5);