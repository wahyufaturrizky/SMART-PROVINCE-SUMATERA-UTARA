<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        // 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'https://fonts.googleapis.com/css?family=Poppins:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap',
        'css/sb-admin-2.css',
        'css/mystyle.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
        'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'rmrevin\yii\fontawesome\NpmFreeAssetBundle'
    ];
}
