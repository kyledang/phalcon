<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 4:04 PM
 */

// Setup the view component
use Phalcon\Mvc\Router;
use Phalcon\Config\Adapter\Ini as ConfigIni;

$config = new ConfigIni(APP_PATH . "app/config/config.ini");

require APP_PATH . "app/config/loader.php";
require APP_PATH . "app/config/database.php";
require APP_PATH . "app/config/view.php";
require APP_PATH . "app/config/session.php";
require APP_PATH . "app/config/dispatcher.php";
$di->set('router', function () {
    $router = new Router();
    $router->mount(new GlobalRouter());
    return $router;
});
