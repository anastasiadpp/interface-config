<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content-header">

</section>

<?php
function RandomToken($length){
    if(!isset($length) || intval($length) <= 8 ){
      $length = $length;
    }
    if (function_exists('random_bytes')) {
        return bin2hex(random_bytes($length));
    }
    if (function_exists('mcrypt_create_iv')) {
        return bin2hex(mcrypt_create_iv($length, MCRYPT_DEV_URANDOM));
    }
    if (function_exists('openssl_random_pseudo_bytes')) {
        return bin2hex(openssl_random_pseudo_bytes($length));
    }
}

function Salt(){
    return substr(strtr(base64_encode(hex2bin(RandomToken(32))), '+', '.'), 0, 44);
}

?>

<section class="content">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USERNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FULLNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PASSWORD')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_ROLE')->dropDownList(
        ['1' => 'Admin', '2' => 'Operator'],['prompt'=>'- Pilih Role -']
    ); ?>

    <?= $form->field($model, 'AUTHKEY')->hiddenInput(['value' => RandomToken(10)])->label(false) ?>

    <?= $form->field($model, 'ACCESSTOKEN')->hiddenInput(['value' => Salt()])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</section>
