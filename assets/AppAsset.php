<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap',
        'design/style/vendor.css',
        'design/style/app.css',
        'design/style/bvi.css',
        'design/style/engine.css',
        'design/style/style.css',
        'design/style/custom.css',

    ];
    public $js = [
        'design/js/jquery-migrate-1.4.1.min.js',
        'design/js/vendor.js',
        'design/js/bvi.js',
        'design/js/app.js',
        'design/krilot_files/cyrlatconverter.js',
        'design/krilot_files/jquery_621.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
