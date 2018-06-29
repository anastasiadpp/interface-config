<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\RefTableDpc */

$this->title = 'Update Ref Table Dpc: ' . $model->ID_REF_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Ref Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_REF_TABLE, 'url' => ['view', 'id' => $model->ID_REF_TABLE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-table-dpc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
