<?php
/**
 * @link http://www.ipaya.cn/
 * @copyright Copyright (c) 2018 ipaya.cn
 */

namespace App\Widgets;


use yii\helpers\Html;

class ActiveForm extends \yii\widgets\ActiveForm
{
    public $options = [];
    public $fieldClass = 'App\Widgets\ActiveField';

    public function init()
    {
        parent::init();
        if ($this->enableClientValidation) {
            Html::addCssClass($this->options, 'need-validation');
            $this->options['novalidate'] = true;
        }
    }

    public function registerClientScript()
    {
        parent::registerClientScript();
        if ($this->enableClientValidation) {
            $js = <<<JS
$('#{$this->options['id']}').on('afterValidate.yiiActiveForm',function(event, messages, errorAttributes){
    $(this).addClass('was-validated');
});
JS;

            $this->getView()->registerJs($js);
        }
    }
}
