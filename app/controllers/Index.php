<?php

namespace App\Controllers;

class Index{

    public function __construct() {
        echo '<h1>Index Controller</h1>';
    }

    public function help(){
        echo '<h3>Index Controller Help method</h3> ' . '<br>';
        echo 'This page have 3 methods index/help, index/doSomething and index/getSomething';
    }

    public function doSomething(){
        echo 'Hello from Index';
    }

    public function getSomething(){
        echo 'Index - getSomething';
    }
}