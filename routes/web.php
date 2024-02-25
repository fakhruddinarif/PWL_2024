<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/hello', function () {
    return 'Hello';
});
Route::get('/world', function () {
    return 'World';
});
Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'NIM: 2241720030' . '<br>' . 'Nama: Muhammad Fakhruddin Arif';
});*/

/*Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos Ke-' . $postId . ' Komentar Ke-' . $commentId;
});
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});*/

/*Route::get('/user/{name?}', function ($name=null) {
    return 'Nama Saya ' . $name;
});*/
/*Route::get('/user/{name?}', function ($name='John') {
    return 'Nama Saya ' . $name;
});*/

/*Route::get('/hello', [\App\Http\Controllers\WelcomeController::class, 'hello']);

Route::get('/', [\App\Http\Controllers\PageController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);
Route::get('/articles/{id}', [\App\Http\Controllers\PageController::class, 'articles'])->name('id');*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about']);
Route::get('/articles/{id}', [\App\Http\Controllers\ArticleController::class, 'articles'])->name('id');

Route::resource('photos', \App\Http\Controllers\PhotoController::class);
Route::resource('photos', \App\Http\Controllers\PhotoController::class)->only([
   'index', 'show'
]);
Route::resource('photos', \App\Http\Controllers\PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

/*Route::get('/greeting', function () {
   return view('hello', ['name' => 'Andi']);
});*/
/*Route::get('/greeting', function () {
    return view('hello', ['name' => 'Andi']);
});*/
Route::get('/greeting', [\App\Http\Controllers\WelcomeController::class, 'greeting']);
