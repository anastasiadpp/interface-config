<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\PitTableDpc */

$this->title = 'Update Pit Table Dpc: ' . $model->ID_PIT_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Pit Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PIT_TABLE, 'url' => ['view', 'id' => $model->ID_PIT_TABLE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pit-table-dpc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
