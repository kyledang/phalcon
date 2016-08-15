<?php
use Phalcon\Mvc\Application;
use Phalcon\Di\FactoryDefault;

try {
    defined("APP_PATH") || define("APP_PATH", realpath("..") . "/");


    // Create a DI
    $di = new FactoryDefault();

    require APP_PATH. "app/config/services.php";

    $application = new Application($di);
    // Handle the request
    $response = $application->handle();

    $response->send();

} catch (\Exception $e) {
    echo "Exception: ", $e->getMessage();
}