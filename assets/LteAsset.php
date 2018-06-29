<?php

namespace app\assets;

use yii\web\AssetBundle;

class LteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'lte/bootstrap/css/bootstrap.min.css',
        'lte/font-awesome/css/font-awesome.min.css',
        'lte/ionicons-2.0.1/css/ionicons.min.css',
        'lte/dist/css/AdminLTE.min.css',
        'lte/dist/css/skins/_all-skins.min.css',
        'lte/plugins/select2/select2.min.css'
    ];
    public $js = [
        'lte/plugins/jQuery/jquery-2.2.3.min.js',
        'lte/bootstrap/js/bootstrap.min.js',
        'lte/dist/js/app.min.js',
        'lte/dist/js/demo.js',
        'lte/plugins/select2/select2.full.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];

    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}