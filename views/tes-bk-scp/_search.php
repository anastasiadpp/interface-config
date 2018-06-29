<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TesBkScpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tes-bk-scp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_BK_TABLE_SCP') ?>

    <?= //$form->field($model, 'ID_BK_TABLE_REF') ?>

    <?= $form->field($model, 'TABLE_REF') ?>

    <?= $form->field($model, 'KEY_REF') ?>

    <?= $form->field($model, 'KEY_SOURCE') ?>

    <?php echo $form->field($model, 'RECORD_SOURCE') ?>

    <?php echo $form->field($model, 'RUN_KEY') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
