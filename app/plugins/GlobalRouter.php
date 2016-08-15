<?php
use Phalcon\Mvc\Router\Group;

/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 11:13 PM
 */
class GlobalRouter extends Group
{
    public function initialize(){

        $this->setPrefix("/");
        $this->add("/",[
           'controller' => 'index'
        ]);
    }
}