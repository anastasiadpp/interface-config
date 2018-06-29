<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\CobaBk */
/* @var $form ActiveForm */
?>
<div class="site-cobabk">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'TABLE_REF') ?>
        <?= $form->field($model, 'TABLE_SOURCE') ?>
        <?= $form->field($model, 'KEY_REF') ?>
        <?= $form->field($model, 'KEY_SOURCE') ?>
        <?= $form->field($model, 'RECORD_SOURCE') ?>
        <?= $form->field($model, 'LOAD_DATE_FIELD_SOURCE') ?>
        <?= $form->field($model, 'RUN_KEY') ?>
        <?= $form->field($model, 'START_DATE') ?>
        <?= $form->field($model, 'END_DATE') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-cobabk -->
