<?php

namespace Common\database;

class DbSql
{
    protected $tableName;

    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }
}