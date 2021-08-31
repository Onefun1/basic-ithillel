<?php

namespace Common\Database;

use PDO;

class DbConnector
{
    private string $dns;
    private $user;
    private $pass;

    public function __construct()
    {
        $config = require 'config/dataBaseConfig.php';

        $this->dns = $config['driver'] . ':host=' . $config['host'] . ';' . 'dbname=' . $config['dbname'];
        $this->user = $config['user'];
        $this->pass = $config['pass'];
    }

    public function connect()
    {
        try {
            $dbh = new PDO($this->dns, $this->user, $this->pass);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $dbh;
    }

}