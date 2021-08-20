<?php

namespace App\Controllers;

use Core\View;

abstract class AppController
{
    protected function render($folder, $name, $data = null){
        View::view($folder, $name, $data);
    }
}