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

use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

Route::match(['get', 'post'], '/', function () {
    // ...
});


