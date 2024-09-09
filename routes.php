<?php

require_once './Router.php';

/* Posts resources */
Router::get('/posts', 'PostController::index');
Router::post('/posts', 'PostController::create');
/* 
|------------------------------------------------------
| To create your custom regex: https://regex101.com/ 
| Learn more here: https://cs.lmu.edu/~ray/notes/regex/
|------------------------------------------------------
*/
Router::get('/posts/(\w+[-]?\w+?)*', 'PostController::show');
Router::put('/posts/[0-9]+', 'PostController::update');
Router::delete('/posts/[0-9]+', 'PostController::delete');

/* Users resources */
Router::get('/users', 'UserController::index');
Router::post('/users', 'UserController::create');
Router::get('/users/[0-9]+', 'UserController::show');
Router::put('/users/[0-9]+', 'UserController::update');
Router::delete('/users/[0-9]+', 'UserController::delete');

/* callback */
Router::get('/callback', function () {
    echo "<h1>Callback</h1>";
});
Router::get('/callback/[0-9]+', function () {
    $uri = $_SERVER['REQUEST_URI'];
    $id = explode('/', $uri)[2];
    echo 'ID => ' . $id;
});