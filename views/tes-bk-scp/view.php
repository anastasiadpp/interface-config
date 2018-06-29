<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\base\TesBkScp */

$this->title = $model->ID_BK_TABLE_SCP;
$this->params['breadcrumbs'][] = ['label' => 'Tes Bk Scps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-bk-scp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_BK_TABLE_SCP], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_BK_TABLE_SCP], [
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
            'ID_BK_TABLE_SCP',
            //'ID_BK_TABLE_REF',
            'TABLE_REF',
            'KEY_REF',
            'KEY_SOURCE',
            'RECORD_SOURCE',
            'RUN_KEY',
        ],
    ]) ?>

</div>
