<?php
namespace App\Enums;
use App\Http\Controllers\CircleArea\CircleAreaController;
use App\Http\Controllers\EinsteinFormula\EinsteinFormulaController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\LengthCircle\LengthCircleController;
use App\Http\Controllers\MainDiagonalCube\MainDiagonalCubeController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\MiddleLineTrapezoid\MiddleLineTrapezoidController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PythagoreanTheorem\PythagoreanTheoremController;
use App\Http\Controllers\SphereArea\SphereAreaController;
use App\Http\Controllers\TrapezoidArea\TrapezoidAreaController;
use App\Http\Controllers\TriangleArea\TriangleAreaController;
use App\Http\Controllers\WayFormula\WayController;
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
Route::get('/circle', [CircleAreaController::class, 'circleForm']);
Route::post('/circle' , [CircleAreaController::class, 'circleFormPost']);
Route::get('/triangle', [TriangleAreaController::class, 'triangleAreaForm']);
Route::post('/triangle' , [TriangleAreaController::class, 'triangleAreaFormPost']);
Route::get('/way', [WayController::class, 'wayForm']);
Route::post('/way', [WayController::class, 'wayFormPost']);
Route::get('/length_circle', [LengthCircleController::class, 'lengthCircleForm']);
Route::post('/length_circle', [LengthCircleController::class, 'lengthCircleFormPost']);
Route::get('/einstein', [EinsteinFormulaController::class, 'einsteinFormulaForm']);
Route::post('/einstein', [EinsteinFormulaController::class, 'einsteinFormulaFormPost']);
Route::get('/pythagorean', [PythagoreanTheoremController::class , 'pythagoreanForm']);
Route::post('/pythagorean', [PythagoreanTheoremController::class, 'pythagoreanFormPost']);
Route::get('/diagonal', [MainDiagonalCubeController::class, 'mainDiagonalCubeForm']);
Route::post('/diagonal', [MainDiagonalCubeController::class, 'mainDiagonalCubeFormPost']);
Route::get('/middle', [MiddleLineTrapezoidController::class , 'middleLineTrapezoidForm']);
Route::post('/middle', [MiddleLineTrapezoidController::class, 'middleLineTrapezoidFormPost']);
Route::get('/trapezoid', [TrapezoidAreaController::class, 'trapezoidAreaForm']);
Route::post('/trapezoid', [TrapezoidAreaController::class, 'trapezoidAreaFormPost']);
Route::get('/sphere', [SphereAreaController::class, 'sphereAreaForm']);
