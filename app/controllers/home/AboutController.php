<?php

namespace Controllers\Home;

use App\Controllers\AppController;
use App\Model\AboutModel;
use App\model\GalleryModel;

class AboutController extends AppController{

    private string $folder = 'home';
    private string $fileName = 'about';

    public function __construct()
    {
        echo '<h1>AboutController</h1>';
    }

    public function index()
    {
        $modelClass = new AboutModel();
        $list = $modelClass->getAllTitles('about');

        $this->render($this->folder, $this->fileName, $list);
    }

    public function local()
    {
        $modelClass = new AboutModel();
        $list = $modelClass->getList();

        $this->render($this->folder, $this->fileName, $list);
    }

    public function help()
    {
        echo '<h3>About Controller Help method</h3>'  . '<br>';
        echo 'This page have 3 methods about/index about/help and about/info';
    }

    public function info()
    {
        echo '<h3>About Controller info method</h3>';
    }

    public function about()
    {
        $modelClass = new AboutModel();
        $title = $modelClass->getAboutByTitle('key1');

        $this->render($this->folder, $this->fileName, $title);
    }

    public function select()
    {
        $modelClass = new AboutModel();
        $list = $modelClass->getSelectedData();

        $this->render($this->folder, $this->fileName, $list);
    }

    public function insert()
    {
        $modelClass = new AboutModel();
        $modelClass->insertData();
    }

    public function delete()
    {
        $modelClass = new AboutModel();
        $modelClass->deleteData();
    }

    public function update()
    {
        $modelClass = new AboutModel();
        $modelClass->updateData();
    }
}