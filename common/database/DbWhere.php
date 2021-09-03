<?php

namespace Common\database;

class DbWhere extends DbConnector
{
    protected $where;

    public function andWhere($where)
    {
        $this->where[] = ['AND' => $where];
    }

    public function orWhere($where)
    {
        $this->where[] = ['OR' => $where];
    }

    public function getWhere()
    {
        if (empty($this->where))
        {
            return NULL;
        }

        $whereString ='';

        foreach ($this->where as $value)
        {
            foreach ($value as $key => $option)
            {
                foreach ($option as $a => $b)
                {
                    if (!empty($whereString))
                    {
                        $whereString .= " $key ";
                    }

                    $whereString .= " $a = $b ";
                }
            }
        }
        return $whereString;
    }
}

//'id = 5'
//[
//[
//    'id' => 1,
//    'litle' => 'teset',
//]
//['like', ['columnName', 'value']]