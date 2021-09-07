<?php

namespace Common\database;

class DbDelete extends DbWhere
{

    public function createWhereString($items)
    {
        $this->strWhere($items);
        $this->where = 'WHERE ' . $this->getWhere();
    }

    public function createDeleteString(): string
    {
        return "DELETE FROM $this->tableName $this->where";
    }
}