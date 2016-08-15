<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 8:45 PM
 */
use Phalcon\Session\Adapter\Files as Session;

$di->setShared('session', function () {
    $session = new Session();

    $session->start();

    return $session;
});