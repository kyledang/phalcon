<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 4:08 PM
 */
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

// Setup the database service
$di->set('db', function () use ($config) {
    return new DbAdapter(array(
        "host"     => "localhost",
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname"   => $config->database->dbname
    ));
});