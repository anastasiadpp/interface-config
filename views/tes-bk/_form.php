<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\base\TesBk;
use app\models\base\TesBkScp;
use app\models\base\AllColum;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\base\TesBk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tes-bk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_BK_TABLE')->textInput() ?>

    <?php 
    echo $form->field($model, 'TABLE_REF')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(TesBk::find()->select(['TABLE_REF'])->distinct()->all(), 'TABLE_REF', 'TABLE_REF'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); 

    ?>

    <?php 
    echo $form->field($model, 'TABLE_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select(['OWNER'])->distinct()->all(), 'OWNER', 'OWNER'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'KEY_REF')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('COLUMN_NAME')->distinct()->all(), 'COLUMN_NAME', 'COLUMN_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    );  ?>

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

    <?= $form->field($model, 'RECORD_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('TABLE_NAME')->distinct()->all(), 'TABLE_NAME', 'TABLE_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    );  ?>

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

    <?= $form->field($model, 'START_DATE')->hiddenInput(['value' => date('d-M-y')])->label(false) ?>

    <?= $form->field($model, 'END_DATE')->hiddenInput(['value' => ''])->label(false) ?>

    <?= $form->field($model, 'RUN_KEY')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(TesBk::find()->select(['RUN_KEY'])->distinct()->all(), 'RUN_KEY', 'RUN_KEY'),
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
