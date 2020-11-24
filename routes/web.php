<?php

use App\Http\Controllers\ArticlesController;
use App\Models\Article;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => Article::paginate(5)
    ]);
});

Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
