<?php

namespace Controllers\Admin;

use Core\View;

class AdminController{

    public $arrData = ['firstName' => 'John', 'lastName' => 'Smith'];

    public function __construct() 
    {
      View::view('admin','admin');
    }

    public function logIn() 
    {
      echo '<h3>Welcome!</h3>';
      foreach ($this->arrData as $key => $value) {
        echo ' ' . $value;
      }
    }
}