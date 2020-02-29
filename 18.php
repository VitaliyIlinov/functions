<?php
//18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.

$array = array(1, 2, 3, 4, 5, 6, 7);

foreach ($array as $value) {
    if ($value == 6 || $value == 7) {
        echo "<b>$value</b><br>";
    } else {
        echo $value . "<br>";
    }
}