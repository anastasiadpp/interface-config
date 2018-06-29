<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\base\CtxTableDpc;
use app\models\base\TableTemp;
use app\models\base\AllColum;

/* @var $this yii\web\View */
/* @var $model app\models\base\CtxTableDpc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctx-table-dpc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_CTX_TABLE')->textInput() ?>

    <?= $form->field($model, 'TABLE_DESC')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(CtxTableDpc::find()->select(['TABLE_DESC'])->distinct()->all(), 'TABLE_DESC', 'TABLE_DESC'),
    'options' => ['placeholder' => 'Select a color ...'],
    'attribute'=>'TABLE_REF',
    'model' => $model,
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'TABLE_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('OWNER')->distinct()->all(), 'OWNER', 'OWNER'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'TIPE_DESC')->dropDownList(
        ['BK' => 'BK', 'R' => 'R', 'L' => 'L'],['prompt'=>'-Choose a Tipe-',
    'onchange'=>'
    $.get( "index.php?r=ctx-table-dpc/lists&id='.'"+$(this).val(), function( data ) {
    $( "select#TABLE_REF_LINK_PARENT" ).html( data );
    });
    ']) ?>

    <?= $form->field($model, 'TABLE_REF_LINK_PARENT')->dropDownList(
        ArrayHelper::map(TableTemp::find()->distinct()->all(),'TABLE_NAME','TABLE_NAME'),['id'=>'TABLE_REF_LINK_PARENT','prompt'=>'-Choose a Run Key-',
    'onchange'=>'
    $.get( "index.php?r=ctx-table-dpc/listkey&id='.'"+$(this).val(), function( data ) {
    $( "select#CONFIG_LINK_ID_PARENT" ).html( data );
    });
    ']) ?>

    <?= $form->field($model, 'KEY_SOURCE_FOR_REF')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('COLUMN_NAME')->distinct()->all(), 'COLUMN_NAME', 'COLUMN_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'CONFIG_LINK_ID_PARENT')->dropDownList(
        ArrayHelper::map(TableTemp::find()->distinct()->all(),'ID_TABLE','ID_TABLE'),['id'=>'CONFIG_LINK_ID_PARENT','prompt'=>'-Choose a Key Source-']) ?>

    <?= $form->field($model, 'RECORD_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('TABLE_NAME')->distinct()->all(), 'TABLE_NAME', 'TABLE_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'KEY_HIER_LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOAD_DATE_FIELD_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(CtxTableDpc::find()->select('LOAD_DATE_FIELD_SOURCE')->distinct()->all(), 'LOAD_DATE_FIELD_SOURCE', 'LOAD_DATE_FIELD_SOURCE'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'START_DATE')->hiddenInput(['value' => date('d-M-y')])->label(false) ?>

    <?= $form->field($model, 'END_DATE')->hiddenInput(['value' => ''])->label(false) ?>

    <?= $form->field($model, 'TABLE_DESC_MV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUN_KEY')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(CtxTableDpc::find()->select(['RUN_KEY'])->distinct()->all(), 'RUN_KEY', 'RUN_KEY'),
    'options' => ['placeholder' => 'Select a color ...'],
    'attribute'=>'TABLE_REF',
    'model' => $model,
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'ADDITIONAL_KEY')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(CtxTableDpc::find()->asArray()->all(), 'ADDITIONAL_KEY', 'ADDITIONAL_KEY'),
    'options' => ['placeholder' => 'Select a color ...','multiple' => true],
    'language' => 'en',
    'maintainOrder'=>true,
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 100
    ]
    ]) ?>

    <?= $form->field($model, 'SOURCE_COLUMN_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLAG_MULTIDATE')->dropDownList(
        ['' => '', '1' => '1']) ?>

    <?= $form->field($model, 'FLAG_UPDATE_END_DATE')->dropDownList(
        ['' => '', '1' => '1']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
