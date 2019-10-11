<?php
namespace core\handlers;
use core\classes\Main;
class MainHandler extends Main 
{
	public function indexAction()
	{
		$this->view();
	}
}