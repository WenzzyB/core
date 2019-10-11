<?php 
return [
	"/" => [
		"handler" => "main",
		"action" => "index"
	],
	"/account/login" => [
		"handler" => "account",
		"action" => "login"
	],
	"/account/register" => [
		"handler" => "account",
		"action" => "register"
	],
	"/account/profile" => [
		"handler" => "account",
		"action" => "profile"
	]
];