<?php

namespace Common\database;

use Exception;

class DbSelect extends DbWhere
{
    protected $columnsName = '*';
    protected $orderBy;
    protected $orderByWhat;
    protected $join;
    protected $joinWith;
    protected $on;
    protected $limit;

    public function setColumnsName($columnsName)
    {
        $this->columnsName = $columnsName;
    }

    public function setJoin($join, $joinWith = NULL, $onOption = NULL)
    {
        $this->join = (isset($join) && isset($joinWith)) ? ' ' . $join : '';
        $this->joinWith =  ' ' . $joinWith;
    }

    public function setOn($on)
    {
        $this->on = (isset($on) && isset($this->joinWith)) ? ' ON ' . $on : '';
    }

    public function setOrderBy($orderBy, $orderByWhat = '')
    {
        $this->orderBy = (isset($orderBy)) ? ' ORDER BY ' . $orderBy : '';
        $this->orderByWhat = (isset($orderByWhat) && isset($orderBy)) ? ' ' . $orderByWhat : '';
    }

    public function setLimit($limit)
    {
        $this->limit = (isset($limit)) ? ' LIMIT ' . $limit : '';
    }

    public function createWhereString($whereOptions)
    {
        $whereObj = new DbWhere();

        $whereObj->orWhere($whereOptions);
        $this->where = ' WHERE ' . $whereObj->getWhere();
    }

    public function createQueryString($whereOptions): string
    {
        if (isset($whereOptions))
        {
            $this->createWhereString($whereOptions);
        }

        $sqlString = 'SELECT ' . $this->buildColumns()
            . ' FROM ' . $this->buildTableName()
            . $this->join . $this->joinWith . $this->on
            . $this->where
            . $this->orderBy . $this->orderByWhat
            . $this->limit;

        print_r($sqlString);
        echo '<br/>';
        return $sqlString;
    }

    public function getError( string $item){
        throw new Exception("Parsing  $item  not found!");
    }

    public function buildQueryString($nameOfData, $itemName)
    {
        if (is_string($nameOfData))
        {
            return $nameOfData;
        }

        if (is_array($nameOfData))
        {
            $queryString = '';
            foreach ($nameOfData as $key => $value)
            {
                if (!empty($queryString)){
                    $queryString .= ',';
                }
                if (is_int($key)) {
                    $queryString .= $value;
                } else {
                    $queryString .= $value . ' as ' . $key;
                }
            }
            return $queryString;

        } else {
            $this->getError($itemName);
        }
    }

    protected function buildColumns()
    {
       return $this->buildQueryString($this->columnsName, 'columns');
    }

    protected function buildTableName()
    {
        return $this->buildQueryString($this->tableName, 'table name');
    }
}
