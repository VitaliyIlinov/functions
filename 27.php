<?php
//Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.


$row = 10;
$cols = 10;
$table = "<table>";
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

for ($i = 0; $i < $row; $i++) {
    $table = $table . "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        $colors_table = array_rand($colors, 1);
        $table = $table . "<td style='background-color:$colors[$colors_table]'>";
        $table = $table . rand(1, 5000);
        $table = $table . "</td>";
    }
    $table = $table . "</tr>";
}
echo $table = $table . "</table>";

