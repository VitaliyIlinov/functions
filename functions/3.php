<?php
//3. Напишите функцию op(), которая принимает три аргумента: $num1 и $num2 – числовые, $operator – символ, обозначающий операцию. Функция должна возвращать результат выполнения оператора $operator над $num1 и $num

function op($num1, $num2, $operator)
{
    if ($operator == '/' && $num2 == 0) {
        echo 'Idiot';
    } elseif ($operator == '+') {
        $result = $num1 + $num2;
    } elseif ($operator == '-') {
        $result = $num1 - $num2;
    } elseif ($operator == '*') {
        $result = $num1 * $num2;
    } elseif ($operator == '/') {
        $result = $num1 / $num2;
    }
    return $result;
}

echo op(5,0,'/');