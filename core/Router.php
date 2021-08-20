<?php

namespace Core;

use Controllers\Home\IndexController;
use Controllers\Home\Page404Controller;

final class Router
{
    private $href;
    private $segments;
    private $controller;
    private $method = NULL;
    private string $controllerNamespace = 'Controllers\\Home\\';


    public function __construct()
    {
      $this->href = $_SERVER["PATH_INFO"];
      $this->segments  = explode('/', $this->href);
      $this->controller = $this->segments[1];

      if ($this->segments[2])
      {
          $this->method = $this->segments[2];
      }
      if ($this->controller == 'admin')
      {
          $this->controllerNamespace = 'Controllers\\Admin\\';
      }
    }

    public function getErrorPage()
    {
        $classObj = new Page404Controller();
    }

    public function noMethodHelper($currentClass)
    {
      $methodsListArray = get_class_methods($currentClass);
      $list = '';

      foreach($methodsListArray as $method)
      {
        if ($method == '__construct'){
          continue;
        }
        $list .= ' /' . $method;
      }
      echo 'Sorry, there is no such method, maybe you wanted to use: ' . $list;
    }

    public function run()
    {
        if (!$this->href) 
        {
          $classObj = new IndexController();
            return;
        }

        $classNamespace = $this->controllerNamespace . ucfirst($this->controller) . 'Controller';

        if (!class_exists($classNamespace))
        {
            $this->getErrorPage();
            return;
        }

        $classObj = new $classNamespace;

        if ($this->method == 'render')
        {
            $this->noMethodHelper($classNamespace);
            return;
        }

        if (method_exists($classObj, $this->method))
        {
            $methodName = $this->method;
            $classObj->$methodName();
        }
        else if (count($this->segments) > 2 && $this->method !== NULL)
        {
          $this->noMethodHelper($classNamespace);
        }
    }
}