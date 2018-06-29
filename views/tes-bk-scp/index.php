<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TesBkScpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tes Bk Scps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-bk-scp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tes Bk Scp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_BK_TABLE_SCP',
            'ID_BK_TABLE_REF',
            'TABLE_REF',
            'KEY_REF',
            'KEY_SOURCE',
            'RECORD_SOURCE',
            'RUN_KEY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
