<?php

namespace App\Model;

use Common\Database\DbConnector;

abstract class AbstractModel
{
    public $dbConnect;

    public function __construct()
    {
        $connectPDO = new DbConnector();
        $this->dbConnect = $connectPDO->connect();
    }

    public function getAllTitles($from, $additionally = '')
    {
        $sortedResult = [];

        $sql = "SELECT * FROM `$from`;";

        $result = $this->dbConnect->query($sql);
        foreach ($result->fetchAll() as $row){
            $sortedResult[] = $row['title'];
        }
        return $sortedResult;
    }

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
        return ($this->titleArray) ? $this->titleArray : [];
    }

    protected function getConnectionToDataBase() // использовал другой способ не по ДЗ, для общего развития
    {
        $connect = mysqli_connect('127.0.0.1', 'root', 'root', 'basic-ithillel');
        if (!$connect)
        {
            echo '<h4> Error connection dataBase!</h4>';
            return;
        }
        return $connect;
    }
}