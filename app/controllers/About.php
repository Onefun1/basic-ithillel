<?php

namespace App\Controllers;

class About{

    public function __construct() {
        echo '<h1>About Controller</h1>';
    }

    public function help(){
        echo '<h3>About Controller Help method</h3>'  . '<br>';
        echo 'This page have 2 methods index/help and index/info';
    }

    public function info(){
        echo '<h3>About Controller info method</h3>';
    }
}