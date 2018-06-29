<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailTransaksiPenjualanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Transaksi Penjualans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-transaksi-penjualan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Transaksi Penjualan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_penjualan',
            'id_barang',
            'jumlah',
            'harga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
