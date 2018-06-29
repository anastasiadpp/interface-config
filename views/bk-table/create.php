<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\base\BkTable */

$this->title = 'Create BK Table';
$this->params['breadcrumbs'][] = ['label' => 'Bk Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bk-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
