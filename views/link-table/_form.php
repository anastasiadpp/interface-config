<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\base\BkTable;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="link-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_NUM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TABLE_LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TABLE_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TABLE_REF')->dropDownList(
        ArrayHelper::map(BkTable::find()->all(),'BLE_REF','BLE_REF'),['prompt'=>'Pilih Tabel BK']) ?>

    <?= $form->field($model, 'FLAG_TABLE_REF_IS_LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_REF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECORD_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOAD_DATE_FIELD_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUN_ORDER')->textInput() ?>

    <?= $form->field($model, 'START_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MMM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'END_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MMM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'ID_TABLE_REF_IS_LINK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RUN_KEY')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
