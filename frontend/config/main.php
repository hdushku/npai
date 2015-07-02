<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
        'gridview' => [
            'class' => '\kartik\grid\Module',
        ],
        // ...
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'google' => [
                'class' => 'yii\authclient\clients\GoogleOAuth',
                'clientId' => '73014911751-ri0pnl06b477jv2ft32dr04isv0d5313.apps.googleusercontent.com',
                'clientSecret' => 'rLSGBXmbA_dV-D0RQ2yKEMAB',
            ],
        ],
    ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
