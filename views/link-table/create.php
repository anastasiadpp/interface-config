<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTable */

$this->title = 'Create Link Table';
$this->params['breadcrumbs'][] = ['label' => 'Link Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="link-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
