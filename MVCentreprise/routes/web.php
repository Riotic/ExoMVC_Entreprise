<?php

use Illuminate\Support\Facades\Route;
use App\Models\Articles;
use App\Http\Controllers\ArticlesController;
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
    $articles = Articles::all();
    return view('articles.index', ['articles' => $articles]);
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('articles', ArticlesController::class);
