<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TransaksiPenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'DELETE EDW BANK INDONESIA';
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

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Delete', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tanggal',
            'total',
            'id_admin',
            'id_resep',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>