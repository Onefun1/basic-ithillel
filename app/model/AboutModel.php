<?php

namespace App\Model;

use Common\database\DbDelete;
use Common\database\DbInsert;
use Common\database\DbSelect;
use Common\database\DbUpdate;
use PDO;

class AboutModel extends AbstractModel
{
    public $titleArray =
        [
            'key1' => 'value About1',
            'key2' => 'value About2',
            'key3' => 'value About3',
            'key4' => 'value About4',
        ];


    public function insertData()
    {
        $insertClass = new DbInsert();

        $insertClass->setTableName('about');
        $insertClass->setData(['title' => "'About Insert 0'", 'about' => "'Inserted row from Class 0'"]);

        $this->dbConnect->exec($insertClass->createInsertString());
    }

    public function updateData(){
        $updateClass = new DbUpdate();

        $updateClass->setTableName('about');
        $updateClass->createWhereString("`about`.`id` = 1");

        $this->dbConnect->exec($updateClass->createUpdateString(['about.id' => 8]));
    }

    public function deleteData(){
        $deleteClass = new DbDelete();

        $deleteClass->setTableName('about');
        $deleteClass->createWhereString("`about`.`id` > 21");

        $this->dbConnect->exec($deleteClass->createDeleteString());
    }

    public function getQueryString()
    {
        $connector = new DbSelect();
        $connector->setTableName('about');
        $connector->setColumnsName('*');

        return $connector->createQueryString(NULL);
    }

    public function getSelectedData(): array
    {
        $sortedResult = [];

        $sql = $this->getQueryString();

        $result = $this->dbConnect->query($sql);

        foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $row){
            $sortedResult[] = $row['title'];
        }
        return $sortedResult;
    }

}