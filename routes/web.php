<?php
namespace App\Enums;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'showHome']);

Route::get('/skills/{id}', [PageController::class, 'showSkills']);

Route::post('/skills', [PageController::class, 'createPost']);
Route::post('/create-post', function () {
    return "тут будут мои функции123";
});

Route::get('/greeting', [GreetingController::class, 'greeting']);

Route::get('/posts/', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/math/', [MathController::class, 'quadraticEquation'] );
