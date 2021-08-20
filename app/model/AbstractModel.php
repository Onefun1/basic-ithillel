<?php

namespace app\model;

abstract class AbstractModel
{
    public function getAboutByTitle($title)
    {
        if (array_key_exists($title, $this->titleArray)) {
            return $this->titleArray[$title];
        } else {
            return false;
        }
    }
    public function getList(): array
    {
        return $this->titleArray;
    }
    protected function getConnectionToDataBase(){
        $connect = mysqli_connect('127.0.0.1', 'root', 'root', 'basic-ithillel');
        if (!$connect)
        {
            echo '<h4> Error connection dataBase!</h4>';
            return;
        }
        return $connect;
    }
}