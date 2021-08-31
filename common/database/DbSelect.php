<?php

namespace Common\database;

class DbSelect
{

    public static function getSelectedData(
        $selectTarget = '*',
        $db_from = '`gallery`',
        $joinType = 'inner join',
        $joinTarget = '`post`',
        $db_on  = NULL,
        $onOption = 'gallery.id = post.gallery_id',
        $db_where = NULL,
        $whereOption = 'gallery_id = 2'): string
    {
        $join = ($joinType !== '') ? ( ' ' . strtoupper($joinType) . ' ' . $joinTarget) : '';
        $on = ($join && $db_on !== '') ?  ' ON ' .  $onOption : '';
        $where = ($db_where !== '') ? ' WHERE ' . $whereOption . ' ' : '';

        $sql = 'SELECT ' . $selectTarget . ' FROM ' . $db_from . $join . $on . $where;

        var_dump($sql); // для себя что бы видеть запрос

        return $sql;
    }

}