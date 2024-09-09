# Router System in PHP

### OOP | MVC

This is a simple router system built in PHP without a framework or Composer Autoload. Check out some examples below.


</br>

Posts
```
Router::get('/posts', 'PostController::index');
Router::post('/posts', 'PostController::create');
```
</br>

Users
````
Router::get('/users/[0-9]+', 'UserController::show');
Router::put('/users/[0-9]+', 'UserController::update');
Router::delete('/users/[0-9]+', 'UserController::delete');
````
</br>

Callback
````
Router::get('/callback', function () {
    echo "<h1>Callback</h1>";
});
````
</br>