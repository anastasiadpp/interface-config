<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\TesBk */

$this->title = 'Update Tes Bk: ' . $model->ID_BK_TABLE;
$this->params['breadcrumbs'][] = ['label' => 'Tes Bks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_BK_TABLE, 'url' => ['view', 'id' => $model->ID_BK_TABLE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tes-bk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
