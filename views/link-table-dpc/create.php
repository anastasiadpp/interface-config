<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model app\models\base\LinkTableDpc */

$this->title = 'Create Link Table Dpc';
$this->params['breadcrumbs'][] = ['label' => 'Link Table Dpcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content-header">
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
    ]) ?>

</section>
