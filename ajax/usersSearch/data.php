<?php

return [
    [
        'id' => 1,
        'title' => 'Админы',
        'checked' => true,
        'users' => [
            ['id' =>  1, 'name'=> null, 'checked' => true, 'login'=> "admin", 'role'=> "Admin", 'role_id'=> 1],
            ['id' =>  2, 'name'=> null, 'checked' => false, 'login'=> "admin2", 'role'=> "Admin", 'role_id'=> 1],
            ['id' =>  3, 'name'=> null, 'checked' => true, 'login'=> "nagibator666", 'role'=> "Admin", 'role_id'=> 1],
            ['id' =>  4, 'name'=> null, 'checked' => false, 'login'=> "admin4", 'role'=> "Admin", 'role_id'=> 1],
        ]
    ],
    [
        'id' => 2,
        'title' => 'Пользователи',
        'checked' => false,
        'users' => [
            ['id' =>  1, 'name'=> null, 'checked' => false, 'login'=> "user", 'role'=> "user", 'role_id'=> 2],
            ['id' =>  2, 'name'=> null, 'checked' => false, 'login'=> "vasya", 'role'=> "user", 'role_id'=> 2],
            ['id' =>  3, 'name'=> null, 'checked' => false, 'login'=> "user3", 'role'=> "user", 'role_id'=> 2],
            ['id' =>  4, 'name'=> null, 'checked' => false, 'login'=> "jenek", 'role'=> "user", 'role_id'=> 2],
        ]
    ],
    [
        'id' => 3,
        'title' => 'Курьеры',
        'checked' => false,
        'users' => [
            ['id' =>  1, 'name'=> null, 'checked' => false, 'login'=> "courier", 'role'=> "courier", 'role_id'=> 3],
            ['id' =>  2, 'name'=> null, 'checked' => false, 'login'=> "courier2", 'role'=> "courier", 'role_id'=> 3],
            ['id' =>  3, 'name'=> null, 'checked' => false, 'login'=> "dostavshik", 'role'=> "courier", 'role_id'=> 4],
            ['id' =>  4, 'name'=> null, 'checked' => false, 'login'=> "courier4", 'role'=> "courier", 'role_id'=> 5],
        ]
    ],
];