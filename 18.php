<?php
//18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$array = array(1, 2, 3, 4, 5, 6, 7, 8);

foreach ($array as $value) {
    $weekends = date("w");
    if ($value == $weekends) {
        echo "<b>$value</b><br>";
    } else
        echo $value . "<br>";
}