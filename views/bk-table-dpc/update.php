<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\BkTableDpc */

$this->title = 'Update Bk Table Dpc: ' . $model->ID_BK_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Bk Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_BK_TABLE, 'url' => ['view', 'id' => $model->ID_BK_TABLE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bk-table-dpc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
