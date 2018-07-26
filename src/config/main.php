<?php
/**
 * @link http://www.ipaya.cn/
 * @copyright Copyright (c) 2018 ipaya.cn
 */

return [
    'id' => 'web',
    'language' => 'zh-CN',
    'timezone' => 'Asia/Shanghai',
    'name' => '我的应用',
    'basePath' => ROOT_PATH . '/src',
    'vendorPath' => ROOT_PATH . '/vendor',
    'controllerNamespace' => 'App\Controllers',
    'runtimePath' => ROOT_PATH . '/runtime',
    'bootstrap' => ['log'],
    'aliases' => [
        '@App' => ROOT_PATH . '/src/App',
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'log' => [
            'class' => 'yii\log\Dispatcher',
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ]
            ]
        ],
        'request' => [
            'cookieValidationKey' => 'asdfas'
        ],
        'user' => [
            'identityClass' => 'App\Models\User',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error'
        ]
    ]
];
