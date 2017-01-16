# Yii2 emoji #

----------

基于Yii2 处理emoji表情,这次到位。 顾不得格式了,简单些几句.


## 描述 ##


### 安装
Either run

```
$ composer require yangshihe/yii2-emoji 
```



to the ```require``` section of your `composer.json` file.


### 配置相关
```php


后端部分
use yangshihe\emoji\Emoji;

//实现方式: (比如微信公众号的昵称含有表情)则如下:
$emoji = new Emoji();
$nickname = $emoji->emoji_unified_to_html($data['nickname']);
// OR
$nickname = (new Emoji())->emoji_unified_to_html($data['nickname']);

// 然后存入数据库神马的
//........

//前端部分 需要视图的部分//
use yangshihe\emoji\EmojiAsset;

//按需加载
EmojiAsset::register($this->getView());

//OR
//依赖加载
//AppAsset.php

    public $depends = [
        'yii\web\YiiAsset',
        .......code.........
        'yangshihe\emoji\EmojiAsset'
    ];

// 然后你就能看到和微信一模一样的表情了.

```
## Demo
暂无
