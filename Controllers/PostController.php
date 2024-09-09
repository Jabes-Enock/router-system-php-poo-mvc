<?php

declare(strict_types=1);

require_once 'BaseController.php';

class PostController extends BaseController
{
    public static function index()
    {
        $data = [
            'title' => 'Post controller',
            'method' => 'index',
        ];

        self::view('post/index', $data);
    }
    public static function create()
    {
        $data = [
            'title' => 'Post controller',
            'method' => 'create',
        ];

        self::view('post/create', $data);
    }

    public static function show(string $id)
    {
        $data = [
            'id' => $id
        ];

        self::view('post/show', $data);
    }

    public static function update(int $id)
    {
        $data = [
            'id' => $id
        ];

        self::view('post/update', $data);
    }

    public static function delete(string $id)
    {
        $data = [
            'id' => $id
        ];

        self::view('post/delete', $data);
    }
}