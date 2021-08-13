<?php

namespace Controllers\Home;

use Core\View;

class Page404Controller{

    public function __construct() 
    {
        echo '<h1>Page404Controller</h1>';
    }

    public function  render()
    {
      View::view('home','page404');
    }


}