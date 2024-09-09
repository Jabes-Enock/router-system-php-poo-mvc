<?php

declare(strict_types=1);

require_once 'BaseController.php';

class UserController extends BaseController
{
    public static function index()
    {
        $data = [
            'name' => 'Jabes',
            'surname' => 'Reis',
        ];

        self::view('user/index', $data);
    }
    public static function create()
    {
        $data = [
            'name' => 'Jabes',
            'surname' => 'Reis',
        ];

        self::view('user/create', $data);
    }

    public static function show(int $id)
    {
        $data = [
            'id' => $id
        ];

        self::view('user/show', $data);
    }

    public static function update(int $id)
    {
        $data = [
            'id' => $id
        ];

        self::view('user/update', $data);
    }

    public static function delete(int $id)
    {
        $data = [
            'id' => $id
        ];

        self::view('user/delete', $data);
    }
}