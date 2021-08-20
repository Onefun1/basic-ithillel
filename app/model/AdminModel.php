<?php

namespace App\model;

class AdminModel extends AboutModel
{
    public $arrDataAdmin =
        [
            'firstName' => 'John',
            'lastName' => 'Smith'
        ];
    public $arrDataTitles =
        [
            'title1' => 'Some text 1',
            'title2' => 'Some text 2',
            'title3' => 'Some text 3',
            'title4' => 'Some text 4',
            'title5' => 'Some text 5',
        ];

    public function getAdminList()
    {
        return $this->arrDataTitles;
    }
    public function getAdminInfo()
    {
        return $this->arrDataAdmin;
    }
    public function test(): array
    {
       $connect = $this->getConnectionToDataBase();
       $adminsList = mysqli_query($connect, "SELECT * FROM `admin`");
       return mysqli_fetch_all($adminsList);
    }
}