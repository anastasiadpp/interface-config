<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Report */

$this->title = 'CREATE REPORT';
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <section class="content-header">

    </section>
    <section class="content">
        <div class="report-create">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>

    </section>
