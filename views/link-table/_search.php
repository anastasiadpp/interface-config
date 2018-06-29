<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LinkTableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="link-table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ID_NUM') ?>

    <?= $form->field($model, 'TABLE_LINK') ?>

    <?= $form->field($model, 'TABLE_SOURCE') ?>

    <?= $form->field($model, 'TABLE_REF') ?>

    <?php echo $form->field($model, 'FLAG_TABLE_REF_IS_LINK') ?>

    <?php echo $form->field($model, 'ID_LINK') ?>

    <?php echo $form->field($model, 'KEY_SOURCE') ?>

    <?php echo $form->field($model, 'KEY_REF') ?>

    <?php echo $form->field($model, 'RECORD_SOURCE') ?>

    <?php echo $form->field($model, 'LOAD_DATE_FIELD_SOURCE') ?>

    <?php echo $form->field($model, 'RUN_ORDER') ?>

    <?php  echo $form->field($model, 'START_DATE') ?>

    <?php echo $form->field($model, 'END_DATE') ?>

    <?php echo $form->field($model, 'ID_TABLE_REF_IS_LINK') ?>

    <?php echo $form->field($model, 'RUN_KEY') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>