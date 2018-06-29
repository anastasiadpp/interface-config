<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\CtxTableDpc */

$this->title = $model->ID_CTX_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Ctx Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctx-table-dpc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_CTX_TABLE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_CTX_TABLE], [
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
            'ID_CTX_TABLE',
            'TABLE_DESC',
            'TABLE_SOURCE',
            'TIPE_DESC',
            'TABLE_REF_LINK_PARENT',
            'KEY_SOURCE_FOR_REF',
            'CONFIG_LINK_ID_PARENT',
            'RECORD_SOURCE',
            'KEY_HIER_LINK',
            'LOAD_DATE_FIELD_SOURCE',
            'START_DATE',
            'END_DATE',
            'TABLE_DESC_MV',
            'RUN_KEY',
            'ADDITIONAL_KEY',
            'SOURCE_COLUMN_ID',
            'FLAG_MULTIDATE',
            'FLAG_UPDATE_END_DATE',
        ],
    ]) ?>

</div>
