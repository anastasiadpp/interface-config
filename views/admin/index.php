<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PetugasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ADMINISTRASI';
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

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'USERNAME',
            'FULLNAME',
            'PASSWORD',
            'ID_ROLE',
            //'AUTHKEY',
            //'ACCESSTOKEN',
            'LAST_LOGIN',
            'LAST_LOGOUT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
