<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTable */

$this->title = 'Update Link Table: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Link Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="link-table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
