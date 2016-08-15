<?php
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 6:17 PM
 */
class UserController extends BaseController
{
    public function indexAction(){
        $this->view->setVars([
           'all' => User::find([
               'deleted_at is NULL'
           ])
        ]);
    }

    public function createAction(){
        $user = new User();

        $user->email = "kyle2@abc.com";
        $user->password = "abc";
        $result = $user->save();

        if(!$result){
            //print_r($user->getMessages());
        }
    }

    public function updateAction(){
        $user = User::findFirstById(2);
        $user->password = "123456";
        $result = $user->update();

        if(!$result){
            //print_r($user->getMessages());
        }
    }
    public function deleteAction(){
        $user = User::findFirstById(1);
        if(!$user){
            echo "";
        }
        $result = $user->delete();
        if(!$result){
            //print_r($user->getMessages());
        }
    }
}