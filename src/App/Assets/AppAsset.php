<?php


/**
 * @link http://www.ipaya.cn/
 * @copyright Copyright (c) 2018 ipaya.cn
 */

namespace App\Assets;


use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '',
        'css/site.css'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'App\Assets\BootstrapAsset',
    ];
}
