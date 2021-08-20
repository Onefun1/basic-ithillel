<?php

namespace app\model;

abstract class AbstractModel
{
    public function getAboutByTitle($title)
    {
        if (array_key_exists($title, $this->titleArray)) {
            return $this->titleArray[$title];
        } else {
            return false;
        }
    }
    public function getList(): array
    {
        return $this->titleArray;
    }
}