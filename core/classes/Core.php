<?php
namespace core\classes;
use core\classes\Main;
use core\classes\Router;
class Core extends Main
{
	public function __construct()
	{
		parent::__construct();
		$this->init();
	}

	private function init()
	{
		$router = new Router();
		$check = $router->check_route();
		$handler = "core\handlers\\" . ucfirst($check['handler']) . "Handler";
		$action = $check['action'] . "Action";
		if(class_exists($handler)) {
			$loadPage = new $handler;
			if(method_exists($loadPage, $action)){
				$loadPage->$action();
			} else {
				echo "Ошибка подключение события";
			}
		} else {
			echo "Ошибка подключения обработчика";
		}


	}
}

