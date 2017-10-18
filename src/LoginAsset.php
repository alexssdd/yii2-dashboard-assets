<?php
namespace alexssdd\dashboard;

use yii\web\AssetBundle;

/**
 * Class LoginAsset
 * @package alexssdd\dashboard
 */
class LoginAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@alexssdd/dashboard/assets';

    /**
     * @var array
     */
    public $css = [
        'css/login.css'
    ];

    /**
     * @var array
     */
    public $js = [];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
} 