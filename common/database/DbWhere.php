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

        if (is_string($this->where))
        {
            return $this->where;
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