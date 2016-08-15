<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 11:18 PM
 */

use Phalcon\Mvc\Dispatcher;

$di->set("dispatcher", function () use ($di) {
    $eventsManager = $di->getShared('eventsManager');

    $permission = new Permission();



    $eventsManager->attach("dispatch", $permission);

    $dispatcher = new Dispatcher();
    $dispatcher->setEventsManager($eventsManager);
    return $dispatcher;
});