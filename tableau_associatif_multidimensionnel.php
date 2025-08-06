<?php

$users = [
    [
        "email" => "samy@gmail.com",
        "password" => "1234567"
    ],
    [
        "email" => "syrine@gmail.com",
        "password" => "1234567"
    ],
    [
        "email" => "vahe@gmail.com",
        "password" => "1234567"
    ],
];

for ($i = 0; $i < count($users); $i++) {
    echo "email : {$users[$i]['email']} - password : {$users[$i]['password']} \n";
}
