<?php

namespace Common\database;

class DbUpdate extends DbWhere
{

    public function createWhereString($items)
    {
        $this->strWhere($items);
        $this->where = ' WHERE ' . $this->getWhere();
    }

    private function createSetDataString(array $dataArray): string
    {
        $result = NULL;
        foreach ($dataArray as $key => $value)
        {
            if (!empty($result)){
                $result .= ',';
            }
            $result .=  $key . ' = ' . $value;
        }
        return  $result;
    }

    public function createUpdateString($dataArray)
    {
        return "UPDATE $this->tableName SET " . $this->createSetDataString($dataArray) . $this->where;
    }

}