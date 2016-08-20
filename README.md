# Yii2 emoji #

----------

基于Yii2 处理emoji表情。


## 描述 ##

- 替换4字节为html span标签；
- 前台加载的根据css显示表情。
- 表情源来自微信公众平台用户管理页面的CSS文件
- 后期表情如缺少了,可以给发邮件,我会增加表情库

### 安装
Either run

```
$ php composer.phar require yangshihe/yii2-emoji "@dev"
```

or add

```
"yangshihe/yii2-emoji": "@dev"
```

to the ```require``` section of your `composer.json` file.


### 配置相关
```php

配置Asset
yangshihe/emoji/EmojiAsset.php;

class EmojiAsset extends AssetBundle {


    public $css = [
        'e.css',
    ];

    public function init()
    {

        parent::init();

        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'lib';

    }

}

后端部分
use yangshihe\emoji;

$face = emoji::toHtml($str);

前端部分 需要视图的部分//
use yangshihe\emoji\EmojiAsset;

按需加载
EmojiAsset::register($this->getView());

OR
依赖加载
AppAsset.php

    public $depends = [
        'yii\web\YiiAsset',
        .......code.........
        'yangshihe\emoji\EmojiAsset'
    ];


```
## Demo
暂无
