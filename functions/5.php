<?php
// get_country_city(city_id) - Получение страны по ID города.

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
$countries = [
    [
        // ID страны
        'id' => 1,
        'name' => 'Italia'
    ],
    [
        'id' => 2,
        'name' => 'USA'
    ],
    [
        'id' => 3,
        'name' => 'Michigan'
    ]
];

function get_country_city($cities, $countries, $city_id)
{
    for ($i = 0; $i < count($cities); $i++) {
        $id = $cities[$i]['id'];
        if ($id == $city_id) {
            for ($j = 0; $j < count($countries); $j++) {
                if ($countries[$j]['id'] == $city_id) {
                    return $countries[$j]['name'];
                }
            }
        }
    }
}

var_dump(get_country_city($cities, $countries, 2));