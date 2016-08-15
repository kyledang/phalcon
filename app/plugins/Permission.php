<?php
use Phalcon\Acl;
use Phalcon\Acl\Adapter\Memory;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Plugin;

/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 11:24 PM
 */
class Permission extends Plugin
{
    protected $_publicResources = [
        'index' => ['*'],
        'signin' => ['*']
    ];
    protected $_userResources = [
        'dashboard' => ['*']
    ];
    protected $_adminResources = [
        'admin' => ['*']
    ];

    protected function _getAcl(){
        if(!isset($this->persistent->acl)){
            $acl = new Memory();
            $acl->setDefaultAction(Acl::DENY);
            $roles = [
                'guest' => new Acl\Role("Guest"),
                'user'  => new Acl\Role("User"),
                'admin' => new Acl\Role("Admin")
            ];
            foreach($roles as $role){
                $acl->addRole($role);
            }
            //Public Resources
            foreach($this->_publicResources as $resource => $action){
                $acl->addResouce(new Acl\Resource($resource),$action);
            }

            //User Resources
            foreach($this->_userResources as $resource => $action){
                $acl->addResouce(new Acl\Resource($resource),$action);
            }

            //Admin Resources
            foreach($this->_adminResources as $resource => $action){
                $acl->addResouce(new Acl\Resource($resource),$action);
            }

            foreach($roles as $role){

            }
            $this->persistent->acl = $acl;
        }
        $this->persistent->acl;

    }
    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {
        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

    }
}