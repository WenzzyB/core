<?php
namespace core\classes;
use core\classes\Ahack;
class Main 
{
	public function __construct()
	{
		Ahack::check_arr($_REQUEST);
		Ahack::check_arr($_COOKIE);
	}
}