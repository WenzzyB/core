<?php 
namespace core\classes;
use core\classes\Main;
class Router extends Main
{
	public function check_route()
	{
		$routes = require_once(CORE_DIR . "/routes/routes.php");
		$request = $_SERVER['REQUEST_URI'];
		foreach ($routes as $key => $value) {
			if($request == $key) {
				$result = $value;
				break;
			} else {
				$result = $routes['/'];
			}
		}
		return $result;
	}
}