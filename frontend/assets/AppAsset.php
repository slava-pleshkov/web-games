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
		'css/main.css',
	];
	public $js = [
		'js/jquery.min.js',
		'js/browser.min.js',
		'js/breakpoints.min.js',
		'js/util.js',
		'js/main.js',
	];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
