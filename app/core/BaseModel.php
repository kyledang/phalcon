<?php
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\SoftDelete;
/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 7:29 PM
 */
class BaseModel extends Model
{
    public $created_at;

    public $updated_at;

    public $softdelete = true;

    public function initialize(){
        if($this->softdelete){
            $this->addBehavior(new SoftDelete([
               'field'=> 'deleted_at',
                'value' => date("Y-m-d H:i:s")
            ]));
        }
    }

    public function beforeCreate(){
        $this->created_at = date("Y-m-d H:i:s");
    }
    public function beforeUpdate(){
        $this->updated_at = date("Y-m-d H:i:s");
    }

}