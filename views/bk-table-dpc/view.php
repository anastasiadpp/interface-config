<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\BkTableDpc */

$this->title = $model->ID_BK_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Bk Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bk-table-dpc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_BK_TABLE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_BK_TABLE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TABLE_REF',
            'TABLE_SOURCE',
            'KEY_REF',
            'KEY_SOURCE',
            'RECORD_SOURCE',
            'LOAD_DATE_FIELD_SOURCE',
            'START_DATE',
            'END_DATE',
            'RUN_KEY',
            'ID_BK_TABLE',
        ],
    ]) ?>

</div>
