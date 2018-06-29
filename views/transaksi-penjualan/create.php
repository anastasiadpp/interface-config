<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model app\models\base\TransaksiPenjualan */

$this->title = 'DELETE EDW BANK INDONESIA';
$this->params['breadcrumbs'][] = ['label' => 'DELETE', 'url' => ['index']];
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

    <?= $this->render('_form', [
        'model' => $model,
        'modelsDetails' => $modelsDetails,
        'barangs' => $barangs
    ]) ?>

</section>