<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BkTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Context Tables';
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
        <?= Html::a('Create Ctx Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_CTX_TABLE',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
