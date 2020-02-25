<?php
//25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.

$array = range(0, 100);

echo 'Min: ' . min($array) . ' Max: ' . max($array);
list($array[0], $array[100]) = array($array[100], $array[0]);
print_r($array);
