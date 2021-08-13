<?php

namespace Controllers\Home;

use Core\View;

class AboutController{

    public function __construct() {
        View::view('home','about');
    }

    public function help(){
        echo '<h3>About Controller Help method</h3>'  . '<br>';
        echo 'This page have 2 methods about/help and about/info';
    }

    public function info(){
        echo '<h3>About Controller info method</h3>';
    }
}