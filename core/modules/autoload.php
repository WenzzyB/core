<?php
echo '<style>
		.pre-loaded{
			background: #00ff393d;
		    height: 50px;
		    float: left;
		    width: 250px;
		    align-items: center;
		    display: flex;
		    justify-content: center;
		    border: 1px solid #00ff1c;
		    border-radius: 7px;
		    margin: 2px;
		}
		.clr{
			clear:both;
		}

		
    </style>';
spl_autoload_register(function($class){
	$load = str_replace("\\","/",$class).".php";
	echo '<pre class="pre-loaded"> Loaded :'.$load.'</pre>';
	require_once($load);
});