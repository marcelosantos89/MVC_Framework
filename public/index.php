<?php
require_once '../core/init.php';

use Pimple\Container;
use Core\App;
  
// require_once 'Database.php';
// require_once 'App.php';
// require_once 'Controller.php';

$container = new Container();

$container['app'] = function ($c){
	return new App;
};

//$app = new App;

$app = $container['app'];
$app->run();