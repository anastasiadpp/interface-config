<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefTableDpcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-table-dpc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= //$form->field($model, 'ID_REF_TABLE') ?>

    <?= $form->field($model, 'TABLE_REF') ?>

    <?= $form->field($model, 'TABLE_SOURCE') ?>

    <?= $form->field($model, 'KEY_REF') ?>

    <?= $form->field($model, 'KEY_SOURCE') ?>

    <?php echo $form->field($model, 'RECORD_SOURCE') ?>

    <?php echo $form->field($model, 'LOAD_DATE_FIELD_SOURCE') ?>

    <?php echo $form->field($model, 'START_DATE') ?>

    <?php echo $form->field($model, 'END_DATE') ?>

    <?php echo $form->field($model, 'RUN_KEY') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
