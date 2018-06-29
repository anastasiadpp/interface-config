<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\TesBkScp */

$this->title = 'Update Tes Bk Scp: ' . $model->ID_BK_TABLE_SCP;
$this->params['breadcrumbs'][] = ['label' => 'Tes Bk Scps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_BK_TABLE_SCP, 'url' => ['view', 'id' => $model->ID_BK_TABLE_SCP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tes-bk-scp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
