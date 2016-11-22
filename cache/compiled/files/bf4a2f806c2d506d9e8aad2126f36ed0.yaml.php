<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/aquamu/user/config/plugins/email.yaml',
    'modified' => 1479839207,
    'data' => [
        'enabled' => true,
        'from' => 'sprout6t@gmail.com',
        'to' => 'sprout6t@gmail.com',
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
        ]
    ]
];
