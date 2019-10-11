<?php
namespace core\classes;
class Main 
{
	protected $config;
	public function __construct()
	{
		
		
		$_REQUEST = $this->check($_REQUEST);
		$_COOKIE = $this->check($_COOKIE);
	}
	public function check($rep)
	{
		if(is_array($rep)) {
			foreach ($rep as $key => $value) {
				$result = trim(preg_replace("#[^0-9a-zA-ZА-Яа-я-ёЁіІєЄ]#u", "", strip_tags($value)));
				$rep[$key] = $result;
			}
			return $rep;
		} else {
			return trim(preg_replace("#[^0-9a-zA-ZА-Яа-я-ёЁіІєЄ]#u", "", strip_tags($rep)));
		}
	}
	public function view() 
	{
		$config = require_once(CORE_DIR . "/configs/GL_CONFIG.php");
		//$this->debug($this->config);
		$page = [
			"head" => file_get_contents(ROOT_DIR . "/layouts/" . $config["layout"] . "/head." . $config["suffix"]),
			"header" => file_get_contents(ROOT_DIR . "/layouts/" . $config["layout"] . "/header." . $config["suffix"])
		];
		foreach ($page as $key => $value) {
			$value = str_replace("{BClayout}", "/layouts/" . $config["layout"], $value);
			$value = str_replace("{BCtitle}", $config["default_title"], $value);
			echo $value;
		}
		//$this->debug($_SERVER);
	}
	public function debug($var)
	{
		echo "<div class=\"clr\"></div> <br><pre>";
		var_dump($var);
		echo "</pre><br>";
	}
}