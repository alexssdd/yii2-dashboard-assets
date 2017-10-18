<?php
namespace alexssdd\dashboard;

use yii\web\AssetBundle;

/**
 * Class NProgressAsset
 * @package alexssdd\dashboard
 */
class NProgressAsset extends AssetBundle
{
    public $sourcePath = '@bower/nprogress';

    public $js = [
        'nprogress.js'
    ];

    public $css = [
        'nprogress.css'
    ];
}