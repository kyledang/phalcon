<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 8:44 PM
 */
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
$di->set('view', function () use ($config) {
    $view = new View();
    $view->setViewsDir(APP_PATH . $config->application->viewsDir);
    $view->registerEngines(
        array(
            ".volt" => function ($view, $di) {
                $volt = new Volt($view, $di);

                $volt->setOptions(
                    array(
                        "compiledPath" => APP_PATH."app/cache/",
                        "compiledExtension" => ".php",
                        "compiledSeparator" => "_"
                    )
                );

                return $volt;
            }
        )
    );
    return $view;
});