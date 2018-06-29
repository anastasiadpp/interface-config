<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content-header">
    <h1>
        Search Petugas
    </h1>
</section>

<section class="content">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'USERNAME') ?>

    <?= $form->field($model, 'FULLNAME') ?>

    <?= $form->field($model, 'PASSWORD') ?>

    <?= $form->field($model, 'ID_ROLE') ?>

    <?php // echo $form->field($model, 'AUTHKEY') ?>

    <?php // echo $form->field($model, 'ACCESSTOKEN') ?>

    <?php echo $form->field($model, 'LAST_LOGIN') ?>

    <?php echo $form->field($model, 'LAST_LOGOUT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</section>
