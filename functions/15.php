<?php
//  get_cars_user(user_id)` - Вывод списка машин пользователя. Если машин у пользователя нет, то функция должна вернуть null.

$users = [
    [
        // ID пользователя
        'id' => 1,
        'first_name' => 'Валентин',
        'last_name' => 'Радужный',
        'second_name' => 'Игоревич',
        'login' => 'valentin',
        'password' => '78vrE0871',
        'gender' => GENDER_MALE,
        'addition_info' => null,
        'birthday' => '14.05.1990',
    ],
    [
        'id' => 2,
        'first_name' => 'Олег',
        'last_name' => 'Мозговой',
        'second_name' => 'Дмитриевич',
        'login' => 'oleg',
        'password' => 'A87s08w7',
        'gender' => GENDER_MALE,
        'addition_info' => 'Машины - моя стихия',
        'birthday' => '10.07.1991',
    ],
    [
        'id' => 3,
        'first_name' => 'Виктория',
        'last_name' => 'Рыбкина',
        'second_name' => 'Александровна',
        'login' => 'prosto_vika',
        'password' => '9Wd803d',
        'gender' => GENDER_FEMALE,
        'addition_info' => 'Я феминистка',
        'birthday' => '23.07.1989',
    ],
];

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

$users_cars = [
    [
        // ID записи: <пользователь-машина>
        'id' => 1,
        'user_id' => 2,
        'car_id' => 1
    ],
    [
        'id' => 2,
        'user_id' => 3,
        'car_id' => 1
    ],
    [
        'id' => 3,
        'user_id' => 3,
        'car_id' => 2
    ],
    // И да, у феминистки 2 машины - это не ошибка
];


function get_cars_user($users, $cars, $users_cars, $id)
{

    $car_list = [];
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] == $id) {
            $user = $users[$i]['id'];
            break;
        }
    }
    for ($i = 0; $i < count($users_cars); $i++) {
        if ($users_cars[$i]['user_id'] == $user) {
            for ($k = 0; $k < count($cars); $k++) {
                if ($cars[$k]['id'] == $users_cars[$i]['car_id']) {
                    $car_list[] = $cars[$k]['name'];
                }
            }
        }
    }
    if (empty($car_list)) {
        echo 'Bitch';
    } else {
        return $car_list;
    }

}


print_r(get_cars_user($users, $cars, $users_cars, 2));