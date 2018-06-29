<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Pemesanan';
?>

<section class="content-header">
    <h1>
        Transaksi Pemesanan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi</a></li>
        <li><a href="#">Pemesanan</a></li>
    </ol>
</section>

<section class="content">

    <?php $form = \yii\widgets\ActiveForm::begin([
        'id' => 'register-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "<div class=\"hidden\">{label}\n{input}\n</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'total')->textInput(['value' => '200']); ?>
    <?= $form->field($model, 'id_admin')->textInput(['value'=>Yii::$app->user->identity->id]); ?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Pemesanan</h3>
        </div>

        <div class="row">
            <div id="containerDetailPemesanan">
                <div class="form-inline">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="kodeBarang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kode Barang</label>
                        <input class="form-control" id="kodeBarang" placeholder="Kode Barang">
                      </div>
                      &nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="jumlah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah</label>
                        &nbsp;&nbsp;&nbsp;
                        <input class="form-control" id="jumlah" placeholder="Jumlah">
                      </div>
                      &nbsp;&nbsp;&nbsp;
                    </div>
                    <button class="btn btn-primary">hapus</button>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button id="btTambah" class="btn btn-default ">Tambah</button>
        </div>
        <div class="box-footer">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-info ']); ?>
            <?php $form->end(); ?>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $(".select2").select2();
    });
    
    document.getElementById('btTambah').onclick = function (e) {
        e.preventDefault();

        if()
        var el = document.getElementById('containerDetailPemesanan');
        el.innerHTML += '<br>' +
                '<div class="form-inline">' +
                '<div class="col-md-4">' +
                '<div class="form-group">' +
                '<label for="kodeBarang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kode Barang&nbsp;&nbsp;</label>' +
				'&nbsp;&nbsp;&nbsp;' +
				'<input class="form-control" id="kodeBarang" placeholder="Kode Barang">' +
				'</div>' +
				'&nbsp;&nbsp;&nbsp;' +
				'</div>' +
                '<div class="col-md-4">' +
                '<div class="form-group">' +
                '<label for="jumlah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah&nbsp;&nbsp;</label>' +
                '&nbsp;&nbsp;&nbsp;' +
                '<input class="form-control" id="jumlah" placeholder="Jumlah">' +
                '</div>' +
                '&nbsp;&nbsp;&nbsp;' +
                '</div>' +
                '<button class="btn btn-primary">hapus</button>' +
                '</div>';
//        var a =
//        document.body.innerHTML +='<div style="position:absolute;width:100%;height:100%;opacity:0.3;z-index:100;background:#000;"></div>';
    };



</script>
<?php
//$this->registerJs(
//'$(function () {$(".select2").select2();});'
//);
//?>