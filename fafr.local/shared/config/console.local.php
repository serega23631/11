<?php

return [
    'components' => [
        'redis'   => [
            'class'    => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port'     => 4547,
            'password' => '8416d16722ff4e3c91a07bcd2a76ffa1',
        ],
        'db' => [
            'dsn'        => 'mysql:host=localhost;dbname=fafr',
            'username'   => 'root',
            'password'   => '10bb94191cd01a461a1c472dac06fa8c',
            'attributes' => [\yii\db\mssql\PDO::ATTR_CASE => \yii\db\mssql\PDO::CASE_LOWER]
        ]
    ]
];
