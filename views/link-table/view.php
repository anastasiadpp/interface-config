<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTable */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Link Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            //'id',
            'ID_NUM',
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
        ],
    ]) ?>

</div>
