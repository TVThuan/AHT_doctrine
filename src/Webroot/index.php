<?php
namespace AHT_DT\Webroot;

use AHT_DT\Dispatcher;

require_once  '../../vendor/autoload.php';

define('WEBROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>