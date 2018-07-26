<?php
/**
 * @link http://www.ipaya.cn/
 * @copyright Copyright (c) 2018 ipaya.cn
 */

use App\Assets\AppAsset;
use yii\helpers\Html;
use yii\web\View;

/** @var $this View */
/** @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container navbar-expand-lg d-flex justify-content-between">
            <a href="<?= Yii::$app->homeUrl ?>" class="navbar-brand d-flex align-items-center">
                <svg class="mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="32"
                     height="32">
                    <path fill="currentColor"
                          d="M256 72c101.689 0 184 82.295 184 184 0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-101.689 82.295-184 184-184m0-64C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 184c35.29 0 64 28.71 64 64s-28.71 64-64 64-64-28.71-64-64 28.71-64 64-64m0-64c-70.692 0-128 57.308-128 128s57.308 128 128 128 128-57.308 128-128-57.308-128-128-128z"></path>
                </svg>
                <strong><?= Yii::$app->name ?></strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?= \yii\widgets\Menu::widget([
                    'options' => [
                        'class' => 'navbar-nav mr-auto'
                    ],
                    'itemOptions' => [
                        'class' => 'nav-item'
                    ],
                    'linkTemplate' => '<a class="nav-link" href="{url}">{label}</a>',
                    'items' => [
                        ['label' => '关于', 'url' => ['/site/about']],
                    ]
                ]) ?>

                <?= \yii\widgets\Menu::widget([
                    'options' => [
                        'class' => 'navbar-nav'
                    ],
                    'itemOptions' => [
                        'class' => 'nav-item'
                    ],
                    'linkTemplate' => '<a class="nav-link" href="{url}">{label}</a>',
                    'items' => [
                        ['label' => '登录', 'url' => ['/site/login']],
                    ]
                ]) ?>
            </div>
        </div>
    </div>
</header>
<main role="main">
    <?php if (in_array(Yii::$app->requestedRoute, ['site/index', ''])): ?>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Swoole + Yii2 = ?</h1>
                <p class="lead text-muted">让 Yii2 完美的运行在 Swoole 上</p>
                <p>
                    <a href="#" class="btn btn-lg btn-primary my-2">开始使用</a>
                </p>
                <p>
                    <a href="https://github.com/iPaya/yii2-swoole-http-server/" class="btn btn-link my-1">Github</a>
                    <a href="https://github.com/iPaya/yii2-swoole-http-server-demo/" class="btn btn-link my-1">Demo
                        源码</a>
                </p>
            </div>
        </section>
    <?php endif; ?>
    <div class="bg-light py-5">
        <div class="container">
            <?= $content ?>
        </div>
    </div>
</main>
<footer class="text-muted">
    <div class="container">
        <p class="float-left">&copy; My Company <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

