<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\PitTableDpc */

$this->title = $model->ID_PIT_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Pit Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pit-table-dpc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_PIT_TABLE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_PIT_TABLE], [
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
            'ID_PIT_TABLE',
            'NO',
            'TABLE_PIT',
            'TABLE_PARENT',
            'TABLE_DESC',
            'TABLE_REFLINK_PARENT',
            'DEPENDEN_NO',
            'KEY',
            'DEPENDEN_KEY',
            'START_DATE',
            'END_DATE',
            'RECORD_SOURCE',
            'LAST_LOAD_DATE',
            'MANDATORY_FLAG',
            'ADDITIONAL_KEY',
            'TABLE_ALIAS',
        ],
    ]) ?>

</div>
