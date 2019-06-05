<?php
if($_POST['action'] == 'init') {
    echo json_encode(array(
        "success" => true,
        "sections" => array(
            array(
                "title" => "Пользователи",
                "users" => [
                    array(
                        "name" => "user 1",
                        "inputName" => "USER_1",
                        "select" => true
                    ),
                    array(
                        "name" => "user 2",
                        "inputName" => "USER_2",
                        "select" => false
                    ),
                    array(
                        "name" => "user 3",
                        "inputName" => "USER_3",
                        "select" => false
                    ),
                    array(
                        "name" => "user 4",
                        "inputName" => "USER_4",
                        "select" => false
                    ),
                    array(
                        "name" => "user 5",
                        "inputName" => "USER_7",
                        "select" => false
                    )
                ]
            ),
            array(
                "title" => "Администраторы",
                "users" => [
                    array(
                        "name" => "admin 1",
                        "inputName" => "USER_5",
                        "select" => true
                    ),
                    array(
                        "name" => "admin 2",
                        "inputName" => "USER_6",
                        "select" => false
                    )
                ]
            )
        )
    ));
} else {
    echo json_encode(array(
        "success" => true,
        "sections" => array(
            array(
                "title" => "Пользователи",
                "users" => [
                    array(
                        "name" => "user 1",
                        "inputName" => "USER_1"
                    ),
                    array(
                        "name" => "user 2",
                        "inputName" => "USER_2"
                    ),
                    array(
                        "name" => "user 3",
                        "inputName" => "USER_3"
                    ),
                    array(
                        "name" => "user 4",
                        "inputName" => "USER_4"
                    )
                ]
            ),
            array(
                "title" => "Администраторы",
                "users" => [
                    array(
                        "name" => "admin 1",
                        "inputName" => "USER_5"
                    ),
                    array(
                        "name" => "admin 2",
                        "inputName" => "USER_6"
                    )
                ]
            )
        )
    ));
}
