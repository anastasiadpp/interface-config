<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTableDpc */

$this->title = 'Update Link Table Dpc: ' . $model->ID_LK_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Link Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_LK_TABLE, 'url' => ['view', 'id' => $model->ID_LK_TABLE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="link-table-dpc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
