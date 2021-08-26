<?php

namespace App\model;

class AdminModel extends AboutModel
{
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

    public function findSmith(): array
    {
        $connect = $this->getConnectionToDataBase();
        $adminsList = mysqli_query($connect, "SELECT * FROM `admin` WHERE lastName LIKE 'Smith';");
        return mysqli_fetch_all($adminsList);
    }
}