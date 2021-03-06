<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BkTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Link Tables';
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
        <?= Html::a('Create Link Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            // 'ID_LK_TABLE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
