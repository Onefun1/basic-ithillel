<?php

namespace Controllers\Admin;

use App\Controllers\AppController;
use App\model\AdminModel;

class AdminController extends AppController {

    private $modelClass;
    private string $folder = 'admin';
    private string $fileName = 'admin';

    public function __construct() 
    {
      echo '<h1>AdminController</h1>';
      $this->modelClass = new AdminModel();
    }

    public function index()
    {
        $list = $this->modelClass->test();
        $this->render($this->folder, $this->fileName, $list);
    }

    public function logIn() 
    {
        $adminInfo = $this->modelClass->getAdminInfo();

        echo '<h3>Welcome!</h3>';

        foreach ($adminInfo as $key => $value)
          {
            echo ' ' . $value;
          }
        }
}