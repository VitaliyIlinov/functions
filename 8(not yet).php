<?php
//8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($array as $value) {
    /* for ($value; $value <= 9; $value++) {
         echo $value .'-';

     } */


    $value = 0;
    while ($value <= 9) {
        $value++;
        echo $value . '-';
    }

}

