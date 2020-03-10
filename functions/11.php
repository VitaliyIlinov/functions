<?php
// get_car(id)` - Получение машины по ее ID

$cars = [
    [
        // ID машины

        'id' => 1,
        'name' => 'Alfa Romeo MiTo',
        'company' => 'Alfa Romeo',
        'city_id' => 1,
        'class' => CAR_CLASS_SEDAN,
    ],
    [
        'id' => 2,
        'name' => 'Ford Mustang',
        'company' => 'Ford',
        'city_id' => 2,
        'class' => CAR_CLASS_SEDAN,
    ],
];

function get_car($cars, $id) {
    for ($i = 0; $i < count($cars); $i++) {
        $car_id = $cars[$i];
        if ($car_id['id'] == $id) {
            return $car_id;
        }
    }
}

print_r(get_car($cars, 2));