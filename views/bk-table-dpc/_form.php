<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\base\BkTableScp;
use app\models\base\BkTableDpc;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\base\BkTableDpc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bk-table-dpc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TABLE_REF')->dropDownList(
        ArrayHelper::map(BkTableScp::find()->all(),'TABLE_REF','TABLE_REF'),['prompt'=>'Pilih Tabel BK']) ?>

    <?= $form->field($model, 'TABLE_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEY_REF')->dropDownList(
        ArrayHelper::map(BkTableScp::find()->all(),'KEY_REF','KEY_REF'),['prompt'=>'Pilih Tabel BK']) ?>

    <?= $form->field($model, 'KEY_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECORD_SOURCE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOAD_DATE_FIELD_SOURCE')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'START_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'END_DATE')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'us',
    'dateFormat' => 'dd-MM-yyyy',
    'options'=>['style'=>'width:100%;', 'class'=>'form-control']
    ]) ?>

    <?= $form->field($model, 'RUN_KEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_BK_TABLE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
