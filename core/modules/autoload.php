<?php
spl_autoload_register(function($class){
	$load = str_replace("\\","/",$class).".php";
	require_once($load);
});