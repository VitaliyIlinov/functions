<?php
//17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

$array = array(1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель', 5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август', 9 => 'Сент.', 10 => 'Окт.', 11 => 'Нояб.', 12 => 'Декаб.');

foreach ($array as $key => $value) {
    $month = date("n");
    if ($key == $month) {
        echo "<b>$key</b><br>";
    } else
        echo $key . "<br>";
}