<?php
namespace yangshihe\emoji;

/**
 *   yii2 扩展, 微信表情包处理 我是测试文件
 *
 *@package
 *@author yuzhiyang <yangshihe@qq.com>
 *@copyright yangshihe <yangshihe@qq.com/>
 *@version 1.0.0
 *@since 2016年8月18日
 *@todo
 */

class Emoji
{

	public static function toHtml($str)
    {
        //$str = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'n.log');
        $str =json_encode($str);
        $str = preg_replace_callback("#(\\\ue[0-9a-f]{3})#i", function($matches){ return addslashes($matches[0]);}, $str);
        $str = json_decode($str);

        $maps = static::maps();

        return str_replace(array_keys($maps), $maps, $str);

	}

	public static function maps()
    {

        $maps = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'emoji_code.json';

        $maps1 = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'emoji_code-1.json';

       $data = json_decode(file_get_contents($maps1), true);
        $arr = [];
        foreach ($data as $key => $value) {
            $arr[$value['softb_unicode']] = '<span class="emoji ' . $value['class']. '"></span>';
        }
       file_put_contents($maps,json_encode($arr));

       $arr = json_decode(file_get_contents($maps), true);


		return json_decode(file_get_contents($maps), true);
	}

    public static function buildHtml($css)
    {

        return '<span class="emoji-outer emoji-sizer"><span class="emoji-inner ' . $css . '"></span></span>';

    }

}