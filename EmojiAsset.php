<?php
namespace yangshihe\emoji;

use Yii;
use yii\web\AssetBundle;

/**
 * @author yangshihe@qq.com
 * @since 1.0
 */

class EmojiAsset extends AssetBundle
{

	public $css = [
        'emoji.css',
	];

	public function init()
    {
        parent::init();
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib';
    }
}
