<?php
//  get_cities_country(country_id)` - Получение списка всех городов,

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

function get_cities_id($cities)

{
    $all_cities = [];
    for ($i = 0; $i < count($cities); $i++) {
        $all_cities[] = $cities[$i]['name'];
    }
    return $all_cities;
}

var_dump(get_cities_id($cities));
