<?php
// 8. get_user(id)` - Получение пользователя по его ID. Если ID пользователя не найден,то выдаем ошибку, что пользователь не найден по такому-то ID.

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

function get_user($users, $id) {
    for ($i = 0; $i < count($users); $i++) {
        $user_id = $users[$i];
        if ($user_id['id'] == $id) {
            return $user_id;
            break;
        }

    }
    echo 'User with ID: ' . $id . ' not found.';
}

print_r(get_user($users, 3));