<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\base\TesBk;
use app\models\base\LinkTableDpc;
use app\models\base\PitTableDpc;
use app\models\base\CtxTableDpc;
use app\models\base\TableTemp;
use yii\helpers\ArrayHelper;
use app\models\base\AllColum;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\base\PitTableDpc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pit-table-dpc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PIT_TABLE')->textInput() ?>

    <?= $form->field($model, 'NO')->textInput() ?>

    <?= $form->field($model, 'TABLE_PIT')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(PitTableDpc::find()->select('TABLE_PIT')->distinct()->all(), 'TABLE_PIT', 'TABLE_PIT'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'TABLE_PARENT')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(TableTemp::find()->select('TABLE_NAME')->distinct()->all(), 'TABLE_NAME', 'TABLE_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'TABLE_DESC')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(CtxTableDpc::find()->select('TABLE_DESC')->distinct()->all(), 'TABLE_DESC', 'TABLE_DESC'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'TABLE_REFLINK_PARENT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPENDEN_NO')->textInput() ?>

    <?= $form->field($model, 'KEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DEPENDEN_KEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'START_DATE')->hiddenInput(['value' => date('d-M-y')])->label(false) ?>

    <?= $form->field($model, 'END_DATE')->hiddenInput(['value' => ''])->label(false) ?>

    <?= $form->field($model, 'RECORD_SOURCE')->widget(Select2::classname(), [
    'data' => ArrayHelper::map(AllColum::find()->select('COLUMN_NAME')->distinct()->all(), 'COLUMN_NAME', 'COLUMN_NAME'),
    'options' => ['placeholder' => 'Select a color ...'],
    'language' => 'en',
    'pluginOptions' => [
        'tags' => true,
        'allowClear' => true,
        'tokenSeparators' => [',', ' '],
        'maximumInputLength' => 128]]
    ); ?>

    <?= $form->field($model, 'LAST_LOAD_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MMM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'MANDATORY_FLAG')->dropDownList(
        ['' => '', '1' => '1']
    ); ?>

    <?= $form->field($model, 'ADDITIONAL_KEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TABLE_ALIAS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
