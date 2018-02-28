<?php
namespace alexssdd\dashboard;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package alexssdd\dashboard
 */
class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@bower/fontawesome/web-fonts-with-css';

	public $css = [
		'css/fontawesome-all.css'
	];
} 