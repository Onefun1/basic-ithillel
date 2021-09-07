<?php


namespace Core;


class View
{
    public static function view($folder, $name, $data = null)
    {
        require_once 'web/' . $folder . '/' . $name . '.php';
    }
}