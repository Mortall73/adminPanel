<?php


if (!empty($_POST)) {
    echo json_encode(array(
        "success" => true,
        "messages" => [
            array(
                "type" => 1,
                "name" => "Вы",
                "time" => "15:55",
                "message" => $_POST['CHAT_MESSAGE'],
                "files" => [
                    
                ]
            ),
        ]
    ));
} else {
    echo json_encode(array(
        "success" => true,
        "messages" => [
            array(
                "type" => 2,
                "name" => "Екатерина Синегина",
                "time" => "15:55",
                "message" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
                "files" => [
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                ]
            ),
            array(
                "type" => 2,
                "name" => "Екатерина Синегина",
                "time" => "15:55",
                "message" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
                "files" => [
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                ]
            ),
            array(
                "type" => 1,
                "name" => "Вы",
                "time" => "15:55",
                "message" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
                "files" => [
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                    array(
                        "link" => "http://download-link.ru",
                        "title" => "textFile.txt"
                    ),
                ]
            ),
        ]
    ));
}