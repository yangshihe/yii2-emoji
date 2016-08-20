<?php
namespace yangshihe\emoji;

/**
 *   yii2 扩展, 微信表情包处理
 *
 *@package
 *@author yuzhiyang <yangshihe@qq.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2016年8月18日
 *@todo
 */

class Emoji
{
    /**
     * 转化emoji 为span标签
     * @param string $str
     * @return string
     */
	public static function toHtml($str)
    {
        $str =json_encode($str);
        $str = preg_replace_callback("#(\\\ue[0-9a-f]{3})#i", function($matches){ return addslashes($matches[0]);}, $str);
        $str = json_decode($str);
        $maps = static::maps();
        return str_replace(array_keys($maps), $maps, $str);
	}

    /**
     * 查找字典
     * @return array
     */
	public static function maps()
    {
        $maps = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'emoji_code.json';
		return json_decode(file_get_contents($maps), true);
	}

}