<?php

use App\Http\Controllers\PostController;
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




Route::get('/', [PostController::class, 'get']);

Route::get('/new-post', function () {
    return view('new-post');
});
Route::post('/new-post', [PostController::class, 'save'] );

Route::get('/posts/{id}', [PostController::class, 'show']);

