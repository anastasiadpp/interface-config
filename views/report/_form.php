<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content-header">

</section>
<section class="content">

    <div class="report-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'report_url')->hiddenInput(['value'=> 'sadas'])->label(false);
        ?>

        <?= $form->field($model, 'jenis_transaksi')
            ->dropDownList(['a' => 'Penjualan', 'b' => 'Pemesanan']); ?>



        <?= $form->field($model, 'from_date')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'eng',
            'dateFormat' => 'yyyy-MM-dd',
        ]) ?>

        <?= $form->field($model, 'until_date')->widget(\yii\jui\DatePicker::classname(), [
            'language' => 'eng',
            'dateFormat' => 'yyyy-MM-dd',
        ]) ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</section>
