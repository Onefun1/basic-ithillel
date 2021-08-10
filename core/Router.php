<?php

namespace Core;

//use App\SecondClass;
use App\Controllers\PageNotFound;
use App\Controllers\About;
use App\Controllers\Gallery;
use App\Controllers\Index;

final class Router
{
    private $href;

    public function __construct()
    {
        $this->href = $_SERVER["PATH_INFO"];
    }




    public function createDefaultClass(){
        $classObj = new PageNotFound();
    }


    public function run()
    {
        if (!$this->href) {
            echo '<h1>Main page</h1>';
            return;
        }

        $segments  = explode('/', $this->href);
        $method = NULL;
        $controller = $segments[1];

        if ($segments[2]){
            $method = $segments[2];
        }

        $classNamespace = 'App\\Controllers\\' . ucfirst($controller);

        if (!class_exists($classNamespace)) {
            $this->createDefaultClass();
            return;
        }

        $classObj = new $classNamespace;

        if (method_exists($classNamespace, $method)){
            $classObj->$method();
        }
    }
}