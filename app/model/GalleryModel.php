<?php

namespace App\model;

use PDO;
use Common\database\DbSelect;

class GalleryModel extends AboutModel
{
    public $titleArray =
        [
            'key1' => 'value Gallery1',
            'key2' => 'value Gallery2',
            'key3' => 'value Gallery3',
            'key4' => 'value Gallery4',
        ];

    public function getGalleryInfo()
        {
          $sql = 
          "SELECT gallery.id as gallery_id, post.id as post_id, gallery.title as gallery_title, post.title as post_title 
           FROM `gallery` 
           INNER JOIN `post` 
           ON gallery.id = post.gallery_id 
           WHERE gallery_id = 2";
          
          $result = $this->dbConnect->query($sql);
          echo '<pre>';
          foreach ($result as $row){
            print_r($row);
          }

          echo '</pre>';
          return $result->fetchAll(PDO::FETCH_ASSOC);
        }

    public function getQueryString(): string
    {
        $connector = new DbSelect();

        $connector->setTableName('gallery');
        $connector->setColumnsName('*');
        $connector->setJoin('INNER JOIN', 'post');
        $connector->setOn('gallery.id = post.gallery_id');
        $connector->setOrderBy('post.title', 'ASC');
        $connector->setLimit('4');

        return $connector->createQueryString(['gallery_id' => 2, 'gallery.id' => 2]);



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
