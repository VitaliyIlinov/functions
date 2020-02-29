<?php
// 2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.

error_reporting(E_NOTICE);
$array = array(1, 20, 15, 17, 24, 35);
foreach ($array as $value) {
    $result += $value;
}
echo $result;

