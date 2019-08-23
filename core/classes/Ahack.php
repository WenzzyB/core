<?php
namespace core\classes;
abstract class Ahack
{
	public static function check_arr($arr)
	{
		foreach ($arr as $key => $value) {
			//$result = strip_tags(trim(str_replace(array("\x22", "\x60", "'","~","!","@","#","№","$","%","^","&","*","(",")","?","\\","/",":",";","|","-","+","=","`","\"","\n","\r","\t","<",">",",","."), "", $value)));
			$result = trim(preg_replace("#[\"'~!@\#№$%^&*)(?\\\\/:;|\-+=`><\,\.]#", "", strip_tags($value)));
			$arr[$key] = $result;
		}
		self::debug($arr);
	}
	public static function debug($var)
	{
		echo "<div class=\"clr\"></div> <br><pre>";
		var_dump($var);
		echo "</pre><br>";

	}
}