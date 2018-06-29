<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PitTableDpcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pit-table-dpc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= //$form->field($model, 'ID_PIT_TABLE') ?>

    <?= $form->field($model, 'NO') ?>

    <?= $form->field($model, 'TABLE_PIT') ?>

    <?= $form->field($model, 'TABLE_PARENT') ?>

    <?= $form->field($model, 'TABLE_DESC') ?>

    <?php echo $form->field($model, 'TABLE_REFLINK_PARENT') ?>

    <?php echo $form->field($model, 'DEPENDEN_NO') ?>

    <?php echo $form->field($model, 'KEY') ?>

    <?php echo $form->field($model, 'DEPENDEN_KEY') ?>

    <?php echo $form->field($model, 'START_DATE') ?>

    <?php echo $form->field($model, 'END_DATE') ?>

    <?php echo $form->field($model, 'RECORD_SOURCE') ?>

    <?php echo $form->field($model, 'LAST_LOAD_DATE') ?>

    <?php echo $form->field($model, 'MANDATORY_FLAG') ?>

    <?php echo $form->field($model, 'ADDITIONAL_KEY') ?>

    <?php echo $form->field($model, 'TABLE_ALIAS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
