<?php

return [
    'components' => [
        'storage' => [
            'class'    => 'app\components\storage\S3Storage',
            'region'   => 'eu-central-1',
            'key'      => 'hTmqvNCvYirTj5NhgoMRVf',
            'secret'   => 'fwxnA7sbJCZ3BEVTzpLNSqjVik1LVQBtz3bUqFzi6GuQ',
            'endpoint' => 'http://hb.bizmrg.com',
            'bucket'   => 'st.fafr.ru'
        ],
        'redis'   => [
            'class'    => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port'     => 4547,
            'password' => '8416d16722ff4e3c91a07bcd2a76ffa1',
        ],
        'db'      => [
            'class'             => 'yii\db\Connection',
            'dsn'               => 'mysql:host=localhost;dbname=fafr',
            'username'          => 'root',
            'password'          => '10bb94191cd01a461a1c472dac06fa8c',
            'charset'           => 'utf8',
            'enableSchemaCache' => true
        ],
        'mailer' => [
            'class'            => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport'        => [
                'class'      => 'Swift_SmtpTransport',
                'host'       => 'smtp.yandex.ru',
                'username'   => 'support@eesl.pro',
                'password'   => 'x0P2QXnTO8U',
                'port'       => '465',
                'encryption' => 'ssl'
            ]
        ]
    ]
];
