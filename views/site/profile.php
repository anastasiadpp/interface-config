<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Profile';
?>

<section class="content-header">
    <h1>
        User Profile
    </h1>
</section>
<!-- Content Header (Page header) -->
<section class="content">

    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img src="<?= Yii::$app->request->baseUrl ?>/lte/avatar.png" class="profile-user-img img-responsive img-circle" >
                    

                    <h3 class="profile-username text-center"><?= Yii::$app->user->identity->fullname ?></h3>

                    <p class="text-muted text-center">Admin Apotek</p>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">

                    <li><a href="#" data-toggle="tab">Settings</a></li>
                </ul>

                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                    <div class="container">
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'username'); ?>
                        <?= $form->field($model, 'fullname'); ?>
                        <?= $form->field($model, 'password'); ?>
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>

                        <?php ActiveForm::end(); ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
