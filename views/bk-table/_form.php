<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\BkTable */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content-header">

</section>

<section class="content">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TABLE_REF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TABLE_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_REF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECORD_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOAD_DATE_FIELD_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'START_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MMM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'END_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MMM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'RUN_KEY')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</section>
