<?php

namespace Controllers\Home;

use App\Controllers\AppController;
use App\Model\AboutModel;
use App\Model\GalleryModel;

class GalleryController extends AppController{

    private string $folder = 'home';
    private string $fileName = 'gallery';

    public function __construct()
    {
        echo '<h1>GalleryController</h1>';
    }

    public function index()
    {
        $modelClass = new GalleryModel();
        $list = $modelClass->getAllTitles('gallery');

        $this->render($this->folder, $this->fileName, $list);
    }

    public function local()
    {
        $modelClass = new GalleryModel();
        $list = $modelClass->getList();

        $this->render($this->folder, $this->fileName, $list);
    }

    public function test()
    {
        $modelClass = new GalleryModel();
        $list = $modelClass->getGalleryInfo();

        $this->render($this->folder, $this->fileName, $list);
    }

    public function test1()
    {
        $modelClass = new GalleryModel();
        $list = $modelClass->getSelectedData();

        $this->render($this->folder, $this->fileName, $list);
    }

    public function help()
    {
        echo '<h3>Gallery Controller Help method</h3>' . '<br>';
        echo 'This page have 2 methods gallery/help and gallery/info';
    }

    public function info()
    {
        echo '<h3>Gallery Controller info method</h3>';
    }
}