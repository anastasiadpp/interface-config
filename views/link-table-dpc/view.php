<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTableDpc */

$this->title = $model->ID_LK_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Link Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-table-dpc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_LK_TABLE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_LK_TABLE], [
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
            'ID',
            'TABLE_LINK',
            'TABLE_SOURCE',
            'TABLE_REF',
            'FLAG_TABLE_REF_IS_LINK',
            'ID_LINK',
            'KEY_SOURCE',
            'KEY_REF',
            'RECORD_SOURCE',
            'LOAD_DATE_FIELD_SOURCE',
            'RUN_ORDER',
            'START_DATE',
            'END_DATE',
            'ID_TABLE_REF_IS_LINK',
            'RUN_KEY',
            'ID_LK_TABLE',
        ],
    ]) ?>

</div>
