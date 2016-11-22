<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://email/email.yaml',
    'modified' => 1479839077,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'from_name' => NULL,
        'to' => NULL,
        'to_name' => NULL,
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'in-v3.mailjet.com',
                'port' => 587,
                'encryption' => 'none',
                'user' => 'e6e4b616832aa353ceaa93de72d6bbdb',
                'password' => '547396a15d276a1375acceda67de1c71'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
