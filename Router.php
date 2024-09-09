<?php

class Router
{
    private static function run(string $method, string $path, $handler)
    {
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if ($currentMethod != $method) {
            return false;
        }

        $pattern = '#^' . $path . '$#siD';

        if (preg_match($pattern, $uri)) {
            if (is_callable($handler)) {
                $handler();
                exit();
            }

            [$controller, $action] = explode('::', $handler);

            require_once './Controllers/' . $controller . '.php';

            $breakUri = explode('/', $uri);

            count($breakUri) > 2 ? $controller::$action($breakUri[2]) : $controller::$action();

            exit();
        }

        return false;
    }

    public static function get(string $path, $handler)
    {
        self::run('GET', $path, $handler);
    }
    public static function post(string $path, $handler)
    {
        self::run('POST', $path, $handler);
    }
    public static function put(string $path, $handler)
    {
        self::run('PUT', $path, $handler);
    }
    public static function delete(string $path, $handler)
    {
        self::run('DELETE', $path, $handler);
    }
}