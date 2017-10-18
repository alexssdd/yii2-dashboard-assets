<?php
namespace alexssdd\dashboard;

use yii\web\AssetBundle;

/**
 * Class AnimateCssAsset
 * @package alexssdd\dashboard
 */
class AnimateCssAsset extends AssetBundle
{
    public $sourcePath = '@bower/animate.css';

    public $css = [
        'animate.min.css'
    ];
}