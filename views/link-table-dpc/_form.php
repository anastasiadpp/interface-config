<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\base\TesBk;
use app\models\base\LinkTableDpc;
use yii\helpers\ArrayHelper;
use app\models\base\AllColum;
use kartik\select2\Select2;
use yii\db\Expression;


/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTableDpc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="link-table-dpc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(LinkTableDpc::find()->select('TABLE_LINK,ID')->distinct()->all(), 'ID', 'TABLE_LINK'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'TABLE_LINK')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(LinkTableDpc::find()->select('TABLE_LINK')->distinct()->all(), 'TABLE_LINK', 'TABLE_LINK'),
    'options' => ['placeholder' => 'Select a color ...'],
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

    <?= $form->field($model, 'TABLE_REF')->dropDownList(
        ArrayHelper::map(TesBk::find()->all(),'TABLE_REF','TABLE_REF'),['id'=>'TABLE_REF','prompt'=>'-Choose a Table Ref-',
    'onchange'=>'
    $.get( "index.php?r=link-table-dpc/lists&id='.'"+$(this).val(), function( data ) {
    $( "select#KEY_REF" ).html( data );
    });
    ']); ?>

    <?= $form->field($model, 'FLAG_TABLE_REF_IS_LINK')->dropDownList(
        ['' => '', '1' => '1'],['onchange'=>'
    $.get( "index.php?r=link-table-dpc/listflag&id='.'"+$(this).val(), function( data ) {
    $( "select#TABLE_REF" ).html( data );
    });
    ']
    ); ?>

    <?= $form->field($model, 'ID_LINK')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(LinkTableDpc::find()->select('ID_LINK')->distinct()->all(), 'ID_LINK', 'ID_LINK'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'KEY_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('COLUMN_NAME')->distinct()->all(), 'COLUMN_NAME', 'COLUMN_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'KEY_REF')->dropDownList(
        ArrayHelper::map(TesBk::find()->distinct()->all(),'KEY_REF','KEY_REF'),['id'=>'KEY_REF','prompt'=>'-Choose a Key Source-']) ?>

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

    <?= $form->field($model, 'LOAD_DATE_FIELD_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('COLUMN_NAME')->distinct()->all(), 'COLUMN_NAME', 'COLUMN_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'RUN_ORDER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'START_DATE')->hiddenInput(['value' => date('d-M-y')])->label(false) ?>

    <?= $form->field($model, 'END_DATE')->hiddenInput(['value' => ''])->label(false) ?>

    <?= $form->field($model, 'ID_TABLE_REF_IS_LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUN_KEY')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(LinkTableDpc::find()->select('RUN_KEY')->distinct()->all(), 'RUN_KEY', 'RUN_KEY'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'ID_LK_TABLE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
