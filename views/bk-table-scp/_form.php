<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\BkTableScp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bk-table-scp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_BK_TABLE_SCP')->textInput() ?>

    <?= $form->field($model, 'TABLE_REF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_REF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECORD_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUN_KEY')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
