<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\web\JsExpression;
use yii\jui\AutoComplete;

use app\models\base\Barang;

/* @var $this yii\web\View */
/* @var $model app\models\base\TransaksiPenjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-pemesanan-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'tanggal')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'eng',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>


    <?= $form->field($model, 'total')->textInput(['id' => 'totalSemua', 'value'=>0]) ?>

    <?= $form->field($model, 'id_admin')->hiddenInput(['value'=> $model->id_admin])->label(false); ?>



    <?= $form->field($model, 'keterangan')->textInput() ?>

    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> &nbsp;Barang</h4></div>
            <div class="panel-body">
                <?php DynamicFormWidget::begin([
                    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                    'widgetBody' => '.container-items', // required: css class selector
                    'widgetItem' => '.item', // required: css class
                    'limit' => 4, // the maximum times, an element can be cloned (default 999)
                    'min' => 1, // 0 or 1 (default 1)
                    'insertButton' => '.add-item', // css class
                    'deleteButton' => '.remove-item', // css class
                    'model' => $modelsDetails[0],
                    'formId' => 'dynamic-form',
                    'uniqueClass'=>'ui-autocomplete-input',
                    'autocompleteDatasource'=>$barangs,
                    'formFields' => [
                        'id_barang',
                        'jumlah',
                        'harga',
                    ],
                ]); ?>

                <div class="container-items"><!-- widgetContainer -->
                    <?php foreach ($modelsDetails as $i => $modelsDetails): ?>
                        <div class="item panel panel-default"><!-- widgetBody -->
                            <div class="panel-heading">
                                <h3 class="panel-title pull-left">Item Transaksi</h3>
                                <div class="pull-right">
                                    <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                    <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                                if (! $modelsDetails->isNewRecord) {
                                    echo Html::activeHiddenInput($modelsDetails, "[{$i}]id");
                                }
                                ?>
                                <div class="row">
                                    <div class="col-sm-4">

                                        <?=$form->field($modelsDetails, "[{$i}]id_barang")->widget(\yii\jui\AutoComplete::classname(),[
                                            'clientOptions' => [
                                                'source' => $barangs,
                                                'select' => new JsExpression("function( event, ui ) {
                                                        var index = $(this).index('.ui-autocomplete-input');
                                                        
                                                        } ")
                                            ],
                                            'options' => [
                                                'class' => 'ui-autocomplete-input', //single class

                                            ],
                                        ])
                                        ?>
                                    </div>


                                    <div class="col-sm-4">
                                        <?= $form->field($modelsDetails, "[{$i}]jumlah")
                                            ->textInput(['class' => 'jumlahBarang','onchange' =>
                                                ' 
                                                var list = document.getElementsByClassName(\'jumlahBarang\');
                                                var index = $(this).index(\'.jumlahBarang\');
                                                
                                                var kodeBarangDom = document.getElementsByClassName(\'ui-autocomplete-input\');
                                                var kodeBarangVal = kodeBarangDom[index].value;
                                                
                                                var a = document.getElementsByClassName(\'jumlahBarang\')[index].value;
                                                var b = a * 5000;
                                                var c = document.getElementsByClassName(\'hargaBarang\');
                                                c[index].value = b;
                                                
                                                var domTotal = document.getElementById(\'totalSemua\');
                                                var domTotalVal = parseInt(domTotal.value);
                                                alert(domTotalVal);
                                                var a = domTotalVal + b
                                                domTotal.value = a;
                                                '
                                            ]) ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?= $form->field($modelsDetails, "[{$i}]harga")
                                            ->textInput(['disabled' => true, 'class' => 'hargaBarang']) ?>
                                    </div>
                                </div><!-- .row -->
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php DynamicFormWidget::end(); ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<script type="text/javascript">
    document.getElementById("jumlahBarang").attachEvent("onchange", function() {
        alert("admin");
        var jumlah = document.getElementById('jumlahBarang').value;
        var harga = jumlah * 5000;
        document.getElementByById('hargaBos').value = 200;
    });

</script>