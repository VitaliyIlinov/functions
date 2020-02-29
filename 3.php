<?php
//3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.

error_reporting(E_NOTICE);

$array = array(26, 17, 136, 12, 79, 15);
foreach ($array as $value) {
    $numSquare = $value * $value;
    $result += $numSquare;
}
echo $result;





