<?php
//get_city(id)` - Получение города по его ID.

$cities = [
    [
        // ID города
        'id' => 1,
        'name' => 'Milano',
        // ID Страны
        'country_id' => 1
    ],
    [
        'id' => 2,
        'name' => 'Flat Rock',
        'country_id' => 3
    ]
];

function get_city($cities, $id)
{
    for ($i = 0; $i < count($cities); $i++) {
        $city_id = $cities[$i];
        if ($city_id['id'] == $id) {
            return $city_id;
        }
    }
}

var_dump(get_city($cities, 2));