<?php

use iPaya\Yii\SwooleHttpServer\HttpServer;

define('YII_DEBUG', false);

require(__DIR__ . '/src/bootstrap.php');

$config = require(ROOT_PATH . '/src/config/main.php');

$server = new HttpServer();
$server->setYiiPath(ROOT_PATH . '/vendor/yiisoft/yii2/Yii.php');
$server->setDocumentRoot(ROOT_PATH . '/public');
$server->setApplicationConfig($config);
$server->start();
