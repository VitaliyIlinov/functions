<?php
//4. get_country(id)` - Получение страны по ее ID.
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


function get_country($id, $countries)
{
    //global $countries;
    for ($i = 0; $i < count($countries); $i++) {
        $country_id = $countries[$i];
        if ($country_id['id'] == $id) {
            return $country_id;
        }
    }
    //return "Такой страны не существует";
}

var_dump(get_country(1, $countries));