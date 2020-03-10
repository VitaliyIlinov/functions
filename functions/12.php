<?php
// 12.  get_users(ids) - Получение списка пользователей, где параметр `ids - массив списка пользователей, которых нужно получить. Если ID пользователя не найден,то выдаем предупреждение, что пользователь не найден по такому-то ID.

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

function get_users($users, $ids) {
    for ($i = 0; $i < count($users); $i++) {
        $user_ids = $users[$i];
        if ($user_ids['id'] == $ids) {
            return $users[$i];
        }
    }
    return 'Error';
}

print_r(get_users($users, 5));