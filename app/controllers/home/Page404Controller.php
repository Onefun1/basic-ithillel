<?php

namespace Controllers\Home;

use Core\View;

class Page404Controller{

    public function __construct() {
      View::view('home','page404');
    }
}