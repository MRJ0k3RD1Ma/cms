<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminkaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery.mCustomScrollbar.min.css',
        'css/bootstrap.css',
        'css/adminka.css',
        'backend/font-awesome/css/font-awesome.css',
        'backend/css/dualskilbox/bootstrap-duallistbox.min.css',
    ];
    public $js = [
        'js/admin.js',
        'js/bootstrap.js',
        'backend/css/dualskilbox/jquery.bootstrap-duallistbox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
