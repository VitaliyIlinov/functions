<?php
// 14 .change_user_pasword(user_id, old_password, new_password) - Функция для смена пароля пользователя. Успешная смена пароля произойдет только в том случае, если старый пароль был введен верно, иначе генерируем ошибку.

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

function change_password($users, $id, $old_password, $new_password)
{
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] == $id and $users[$i]['password'] == $old_password) {
            $users[$i]['password'] = $new_password;
            echo $users[$i]['password'];
        } else {
            echo 'wrong';
        }
    }
}


change_password($users, 2, 'A87s08w7', 'savchuk');

