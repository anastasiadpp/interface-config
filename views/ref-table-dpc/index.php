<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BkTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reference Tables';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content-header">
    <?=
    Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
</section>
<section class="content">
<div style="overflow:auto;overflow-y:hidden;height:100%">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reference Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_REF_TABLE',
            'TABLE_REF',
            'TABLE_SOURCE',
            'KEY_REF',
            'KEY_SOURCE',
            'RECORD_SOURCE',
            'LOAD_DATE_FIELD_SOURCE',
            'START_DATE',
            'END_DATE',
            'RUN_KEY',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
