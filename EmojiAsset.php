<?php

namespace yangshihe\emoji;

use yii\web\AssetBundle;

class EmojiAsset extends AssetBundle {

    public $css = [
		'emoji.css',
	];


	public function init() {
		parent::init();
		$this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib';

	}
}
