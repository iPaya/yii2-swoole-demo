<?php


use iPaya\Yii\Swoole\HttpServer;

define('YII_DEBUG', false);

require(__DIR__ . '/src/bootstrap.php');

$config = require(ROOT_PATH . '/src/config/main.php');
$server = new HttpServer(ROOT_PATH . '/public');
$server->setApplicationConfig($config);
$server->start();
