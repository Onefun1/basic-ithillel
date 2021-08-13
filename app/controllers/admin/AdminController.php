<?php

namespace Controllers\Admin;

use Core\View;

class AdminController {

    public $arrData = ['firstName' => 'John', 'lastName' => 'Smith'];

    public function __construct() 
    {
      echo '<h1>IndexController</h1>';
    }

    public function  render()
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