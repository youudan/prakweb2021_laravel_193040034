<?php

use App\Http\Controllers\DasboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name'  => 'Wijdan Muhammad Ridwanulloh',
        'email' => '193040034.wijdan@mail.unpas.ac.id',
        'image' => 'wijdan.png'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view(
        'categories',
        [
            'title'      => 'Post Categories',
            'categories' => Category::all(),
        ]
    );
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);

Route::get(
    '/dashboard',
    fn () => view('dashboard.index')
)->middleware('auth');

Route::resource('/dashboard/posts', DasboardPostController::class)->middleware('auth');
