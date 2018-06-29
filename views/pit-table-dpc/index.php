<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BkTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'PIT Tables';
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
        <?= Html::a('Create PIT Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_PIT_TABLE',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
