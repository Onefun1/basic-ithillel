<?php

namespace Controllers\Home;

use Core\View;

class IndexController{

  public $dataArr = ['data1' => 'Text1', 'data2' => 'Text2'];

    public function __construct() 
    {
      echo '<h1>IndexController</h1>';
    }

    public function  render()
    {
      View::view('home','index', $this->dataArr);
    }

    public function help()
    {
        echo '<h3>Index Controller Help method</h3> ' . '<br>';
        echo 'This page have 3 methods index/help, index/doSomething and index/getSomething';
    }

    public function doSomething()
    {
        echo 'Hello from Index';
    }

    public function getSomething()
    {
        echo 'Index - getSomething';
    }
}