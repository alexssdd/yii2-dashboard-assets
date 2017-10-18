<?php
namespace alexssdd\dashboard;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package alexssdd\dashboard
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/fontawesome';

    public $css = [
        'css/font-awesome.min.css'
    ];
} 