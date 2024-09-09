<?php


class BaseController
{
    protected static function view(string $filename, array $data = [])
    {
        require_once './Views/' . $filename . '.php';
    }
}