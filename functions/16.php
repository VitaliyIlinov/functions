<?php
//get_users_car(car_id) - По ID машины вывести всех пользователей, которые приобрели данную машину

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

function get_users_cars($users, $users_cars, $id_car)
{
    $name_list = [];
    for ($i = 0; $i < count($users_cars); $i++) {
        $car_id = $users_cars[$i]['car_id'];
        if ($car_id == $id_car) {
            for ($j = 0; $j < count($users); $j++) {
                if ($users[$j]['id'] == $users_cars[$i]['user_id']) {
                    $name_list[] = $users[$j]['first_name'] . $users[$j]['last_name'];
                }
            }
        }
    } return $name_list;
}

print_r(get_users_cars($users, $users_cars, 1));