<?php

namespace Controllers\Home;

use Core\View;

class Page404Controller{

    public function __construct() 
    {
        header("HTTP/1.1 404 Not Found");
        header("Status: 404 Not Found");
        echo '<h1>Page404Controller</h1>';
    }

    public function  render()
    {
      View::view('home','page404');
    }
}