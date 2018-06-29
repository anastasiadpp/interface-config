<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\base\TesBkScp */

$this->title = 'Create Tes Bk Scp';
$this->params['breadcrumbs'][] = ['label' => 'Tes Bk Scps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tes-bk-scp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
