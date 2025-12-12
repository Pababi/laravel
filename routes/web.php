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

Route::view('/welcome', 'welcome');

Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});
Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    // ...
});

Route::get('/user/{id}', function (Request $request, string $id) {
    return 'User ' . $id;
});

Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});

Route::get('/user/{name}', function (string $name) {
    // ...
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}', function (string $id) {
    // ...
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    // ...
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    // ...
})->whereNumber('id')->whereAlpha('name');

Route::get('/user/{name}', function (string $name) {
    // ...
})->whereAlphaNumeric('name');

Route::get('/user/{id}', function (string $id) {
    // ...
})->whereUuid('id');

Route::get('/user/{id}', function (string $id) {
    // ...
})->whereUlid('id');

Route::get('/category/{category}', function (string $category) {
    // ...
})->whereIn('category', ['movie', 'song', 'painting']);

Route::get('/category/{category}', function (string $category) {
    return $category;
})->whereIn('category', CategoryEnum::cases());

/**
 * Запуск любых служб приложения.
 */
//public function boot(): void
//{
//    Route::pattern('id', '[0-9]+');
//}

Route::get('/user/{id}', function (string $id) {
    // Выполнится, только если параметр `{id}` имеет числовое значение...
});

Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');

Route::get('/user/profile', function () {
    // ...
})->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');

// Создание URL-адреса...
$url = route('profile');

// Создание перенаправления...
return redirect()->route('profile');

return to_route('profile');

Route::get('/user/{id}/profile', function (string $id) {
    // ...
})->name('profile');

$url = route('profile', ['id' => 1]);

Route::get('/user/{id}/profile', function (string $id) {
    // ...
})->name('profile');

$url = route('profile', ['id' => 1, 'photos' => 'yes']);

// /user/1/profile?photos=yes


use Symfony\Component\HttpFoundation\Response;

/**
 * Обработка входящего запроса.
 *
 * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
 */
public
function handle(Request $request, Closure $next): Response
{
    if ($request->route()->named('profile')) {
        // ...
    }
    return $next($request);


    Route::middleware(['first', 'second'])->group(function () {
        Route::get('/', function () {
            // Использует посредники `first` и `second`...
        });

        Route::get('/user/profile', function () {
            // Использует посредники `first` и `second`...
        });
    });
}

use App\Http\Controllers\OrderController;

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('/user/{id}', function (string $account, string $id) {
        // ...
    });
});


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Соответствует URL-адресу `/admin/users`
    });
});

Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Маршруту присвоено имя `admin.users`...
    })->name('users');
});

use App\Models\User;

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});


use App\Http\Controllers\UserController;
use App\Models\User;

// Определение маршрута...
Route::get('/users/{user}', [UserController::class, 'show']);

// Определение метода контроллера...
public function show(User $user)
{
    return view('user.profile', ['user' => $user]);
}

Route::get('/users/{user}', function (User $user) {
    return $user->email;
})->withTrashed();


use App\Models\Post;

Route::get('/posts/{post:slug}', function (Post $post) {
    return $post;
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
});

