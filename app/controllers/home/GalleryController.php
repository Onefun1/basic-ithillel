<?php

namespace Controllers\Home;

use Core\View;

class GalleryController{

    public function __construct() {
      View::view('home','gallery');
    }

    public function help(){
        echo '<h3>Gallery Controller Help method</h3>' . '<br>';
        echo 'This page have 2 methods gallery/help and gallery/info';
    }

    public function info(){
        echo '<h3>Gallery Controller info method</h3>';
    }
}