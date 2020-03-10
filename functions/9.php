<?php
// 9. create_user_full_name(first_name, last_name, second_name)` - Функция, которая объеденяет имя, фамилию и отчество пользователя в полное его имя.


function create_user_full_name($first_name, $last_name, $second_name) {
    return $first_name . ' ' . $second_name . ' ' . $last_name;
}

print_r(create_user_full_name(Савчук, Филипп, Константинович));