<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\base\TesBk */

$this->title = 'Create Tes Bk';
$this->params['breadcrumbs'][] = ['label' => 'Tes Bks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-bk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
