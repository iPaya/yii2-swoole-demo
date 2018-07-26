<?php
/**
 * @link http://www.ipaya.cn/
 * @copyright Copyright (c) 2018 ipaya.cn
 */


use App\Models\LoginForm;
use App\Widgets\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

/** @var $this View */
/** @var $model LoginForm */

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>填写下面的表单登录:</p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="alert alert-warning">
        使用 <strong>admin/admin</strong> 或 <strong>demo/demo</strong> 登录
    </div>
</div>
