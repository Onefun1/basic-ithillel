<?php
namespace App\Controllers;

class Gallery{

    public function __construct() {
        echo '<h1>Gallery Controller</h1>';
    }

    public function help(){
        echo '<h3>Gallery Controller Help method</h3>' . '<br>';
        echo 'This page have 2 methods gallery/help and gallery/info';
    }

    public function info(){
        echo '<h3>Gallery Controller info method</h3>';
    }
}