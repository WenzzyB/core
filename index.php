<?php
#BlueCore
error_reporting(E_ALL);
define('ROOT_DIR', dirname(__FILE__));
define('CORE_DIR', dirname(__FILE__) . "/core");
define('SITE', $_SERVER['SERVER_NAME']);
define('BLUECORE', true);

require_once("core/modules/autoload.php");
use core\classes\Core;
$core = new Core;
#dev : Wenzzy

?>
