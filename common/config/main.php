<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => [
        'common\components\Events',
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'modelMap' => [
                'User' => 'common\models\User',
            ],
        ],
        'dialog' => [
            'class' => 'nullref\dialog\Module',
            'components' => [
                'userManager' => [
                    'class' => 'nullref\dialog\components\UserManager',
                    'modelClass' => 'common\models\User',
                ],
            ],
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
