<?php
namespace App\Enums;
use App\Http\Controllers\CircleSController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\LengthCircleController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TriangleAreaController;
use App\Http\Controllers\WayController;
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
Route::get('/math', [MathController::class, 'mathForm'] );
Route::post('/math' , [MathController::class, 'mathFormPost']);
Route::get('/circle', [CircleSController::class, 'circleForm']);
Route::post('/circle' , [CircleSController::class, 'circleFormPost']);
Route::get('/triangle', [TriangleAreaController::class, 'triangleAreaForm']);
Route::post('/triangle' , [TriangleAreaController::class, 'triangleAreaFormPost']);
Route::get('/way', [WayController::class, 'wayForm']);
Route::post('/way', [WayController::class, 'wayFormPost']);
Route::get('/length_circle', [LengthCircleController::class, 'lengthCircleForm']);
Route::post('/length_circle', [LengthCircleController::class, 'lengthCircleFormPost']);
