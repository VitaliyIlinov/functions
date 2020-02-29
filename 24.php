<?php
//24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.

$num = 442158755745;
$arrayNum = str_split($num);
$count = 0;

function numSum()
{
    global $arrayNum, $count;
    foreach ($arrayNum as $value) {
        if ($value == 5) {
            $count++;
        }

    }
    echo $count;
}

numSum();