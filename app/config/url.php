<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 8:45 PM
 */
use Phalcon\Mvc\Url as UrlProvider;

// Setup a base URI so that all generated URIs include the "tutorial" folder
$di->set('url', function () use ($config) {
    $url = new UrlProvider();
    $url->setBaseUri($config->application->baseUri);
    return $url;
});
