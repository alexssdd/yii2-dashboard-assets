<?php

namespace alexssdd\dashboard;

use yii\web\AssetBundle;

/**
 * Class DashboardAsset
 * @package alexssdd\dashboard
 */
class DashboardAsset extends AssetBundle
{
    public $sourcePath = '@alexssdd/dashboard/assets';

    public $css = [
        'css/dashboard.css',
        'css/box.css',
        'css/media.css',
    ];

    public $js = [
        'js/dashboard.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'alexssdd\dashboard\FontAwesomeAsset',
       // 'alexssdd\dashboard\NProgressAsset',
        'alexssdd\dashboard\AnimateCssAsset',
    ];
} 
