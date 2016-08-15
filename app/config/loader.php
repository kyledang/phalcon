<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 4:05 PM
 */

// Register an autoloader
use Phalcon\Loader;

$loader = new Loader();
$loader->registerDirs(array(
    APP_PATH . $config->application->controllersDir,
    APP_PATH . $config->application->modelsDir,
    APP_PATH . $config->application->formsDir,
    APP_PATH . $config->application->libraryDir,
    APP_PATH . $config->application->pluginsDir,
    APP_PATH . $config->application->coreDir,


))->register();