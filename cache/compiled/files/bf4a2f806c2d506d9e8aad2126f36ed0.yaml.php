<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/aquamu/user/config/plugins/email.yaml',
    'modified' => 1477179726,
    'data' => [
        'enabled' => true,
        'from' => 'your@email.here',
        'to' => 'your@email.here',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
