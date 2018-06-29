<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BkTableScpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bk Table Scps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bk-table-scp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bk Table Scp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_BK_TABLE_SCP',
            'TABLE_REF',
            'KEY_REF',
            'KEY_SOURCE',
            'RECORD_SOURCE',
            'RUN_KEY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
