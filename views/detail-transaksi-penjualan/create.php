<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetailTransaksiPenjualan */

$this->title = 'Create Detail Transaksi Penjualan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Transaksi Penjualans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-transaksi-penjualan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
