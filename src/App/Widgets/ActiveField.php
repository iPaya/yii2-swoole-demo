<?php
/**
 * @link http://www.ipaya.cn/
 * @copyright Copyright (c) 2018 ipaya.cn
 */

namespace App\Widgets;


class ActiveField extends \yii\widgets\ActiveField
{
    public $errorOptions = [
        'class' => 'invalid-feedback'
    ];
}
