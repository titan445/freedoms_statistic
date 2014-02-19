<?php

return array(
    'username' => array(
        'not_empty' => 'Имя пользователя не должно быть пустым',
        'max_length' => 'Длина должна быть не больше 255',
        'unique' => 'Такой пользователь уже существует',
    ),
    'email' => array(
        'email' => 'Email не email',
        'not_empty' => 'Email не должен быть пустым',
        'max_length' => 'Email не больше 255 символов',
        'unique' => 'такой email уже существует',
    ),
    'password' => array(
        'not_empty' => 'Email не должен быть пустым',
        'max_length' => 'Email не больше 255 символов',
    ),
);
