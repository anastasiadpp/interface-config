<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CtxTableDpcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctx-table-dpc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= //$form->field($model, 'ID_CTX_TABLE') ?>

    <?= $form->field($model, 'TABLE_DESC') ?>

    <?= $form->field($model, 'TABLE_SOURCE') ?>

    <?= $form->field($model, 'TIPE_DESC') ?>

    <?= $form->field($model, 'TABLE_REF_LINK_PARENT') ?>

    <?php echo $form->field($model, 'KEY_SOURCE_FOR_REF') ?>

    <?php echo $form->field($model, 'CONFIG_LINK_ID_PARENT') ?>

    <?php echo $form->field($model, 'RECORD_SOURCE') ?>

    <?php echo $form->field($model, 'KEY_HIER_LINK') ?>

    <?php echo $form->field($model, 'LOAD_DATE_FIELD_SOURCE') ?>

    <?php echo $form->field($model, 'START_DATE') ?>

    <?php echo $form->field($model, 'END_DATE') ?>

    <?php echo $form->field($model, 'TABLE_DESC_MV') ?>

    <?php echo $form->field($model, 'RUN_KEY') ?>

    <?php echo $form->field($model, 'ADDITIONAL_KEY') ?>

    <?php echo $form->field($model, 'SOURCE_COLUMN_ID') ?>

    <?php echo $form->field($model, 'FLAG_MULTIDATE') ?>

    <?php echo $form->field($model, 'FLAG_UPDATE_END_DATE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
