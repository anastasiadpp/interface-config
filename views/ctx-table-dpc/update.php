<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\CtxTableDpc */

$this->title = 'Update Ctx Table Dpc: ' . $model->ID_CTX_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Ctx Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_CTX_TABLE, 'url' => ['view', 'id' => $model->ID_CTX_TABLE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ctx-table-dpc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
