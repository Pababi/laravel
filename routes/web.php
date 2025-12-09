<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
//    return Inertia::render('welcome');
    $html = '<form method="post" action="create-post">
<input type="text" value="Create Post">
<button>Отправить</button>
</form>';
    return $html;

});

Route::get('/skills', function () {
    return "тут будут мои функции123";
});

Route::post('/create-post', function () {
    return "тут будут мои функции123";
});

Route::get('/greeting', function () {
    return 'Hello World';
});

use App\Http\Controllers\Controller;

Route::get('/user', [Controller::class, 'index']);

Route::match(['get', 'post'], '/', function () {
    // ...
});

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

Route::match(['get', 'post'], '/', function () {
    // ...
});

Route::any('/', function () {
    // ...
});

use Illuminate\Http\Request;

Route::get('/users', function (Request $request) {
    // ...
});

return '<form method="POST" action="/profile">
 @csrf
...
</form>';

Route::redirect('/here', '/there'); // Метод
Route::redirect('/here', '/there', 301); // Необязательный 3-ий параметр
Route::permanentRedirect('/here', '/there'); // Возвращает код в 301
