<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1>Welcome to EDWBI SPS</h1>

    <p style="color: #ffffff">Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "<div class=\"field-wrap\">{label}\n{input}\n</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<!--        <?//= $form->field($model, 'username')->textInput(['autofocus' => true]) ?> -->
        <?= $form->field($model, 'USERNAME')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'PASSWORD')->passwordInput() ?>

        <p class="forgot"><a href="#">Forgot Password?</a></p>

    <!--        <?//= $form->field($model, 'rememberMe')->checkbox([
//            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//        ]) ?> -->

        <div class="form-group">
            <div>
                <?= Html::submitButton('LOGIN', ['class' => 'button button-block', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
