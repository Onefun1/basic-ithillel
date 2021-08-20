<?php

namespace Controllers\Home;

use App\Controllers\AppController;
use App\Model\IndexModel;

class IndexController extends AppController {

    private string $folder = 'home';
    private string $fileName = 'index';

    public function __construct() 
    {
      echo '<h1>IndexController</h1>';
    }

    public function  index()
    {
        $modelClass = new IndexModel();
        $list = $modelClass->getList();

        $this->render($this->folder, $this->fileName, $list);
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