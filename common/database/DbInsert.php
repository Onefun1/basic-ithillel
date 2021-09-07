<?php

namespace Common\database;

class DbInsert extends DbSql
{
    private array  $data;

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function createInsertString(): string
    {
        $keys = implode(', ', array_keys($this->data));
        $values = implode(', ', array_values($this->data));

        return "INSERT INTO $this->tableName ($keys) VALUES ($values)";
    }
}