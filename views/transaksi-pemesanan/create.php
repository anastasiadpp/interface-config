<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\base\TransaksiPemesanan */

$this->title = 'Read;
$this->params['breadcrumbs'][] = ['label' => 'Read', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
    <h1>
        EDW BANK INDONESIA
    </h1>
    <?=
    Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])
    ?>
</section>


<section class="content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsDetails' => $modelsDetails,
        'barangs' => $barangs
    ]) ?>

</section>