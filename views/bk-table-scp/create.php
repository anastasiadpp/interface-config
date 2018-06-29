<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\base\BkTableScp */

$this->title = 'Create Bk Table Scp';
$this->params['breadcrumbs'][] = ['label' => 'Bk Table Scps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bk-table-scp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
