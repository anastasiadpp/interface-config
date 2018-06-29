<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\base\Admin */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Create', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content-header">
    <h1>
		CREATE
    </h1>
    <?=
    Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ])
    ?>
</section>


<section class="content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</section>
