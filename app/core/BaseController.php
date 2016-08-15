<?php
use Phalcon\Assets\Filters\Cssmin;
use Phalcon\Assets\Filters\Jsmin;
use Phalcon\Mvc\Controller;

/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 8/14/16
 * Time: 3:35 PM
 */
class BaseController extends Controller
{
    public function initialize(){

        $this->assets
                    ->collection('style')
                    ->addCss("third-party/css/bootstrap.min.css",false,false)
                    ->addCss("css/main.css")
                    ->setTargetPath("css/production.css")
                    ->setTargetUri("css/production.css")
                    ->join(true)
                    ->addFilter(new Cssmin());
        $this->assets
                    ->collection('script')
                    ->addJs("third-party/js/bootstrap.min.js",false,false)
                    ->addJs("third-party/js/jquery.min.js",false,false)
                    ->setTargetPath("js/production.js")
                    ->setTargetUri("js/production.js")
                    ->join(true)
                    ->addFilter(new Jsmin());

    }
}