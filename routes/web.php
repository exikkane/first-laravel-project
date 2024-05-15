<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCategoryController;

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
    return view('welcome');
});
Route::get('about', [PageController::class, 'about'])
    ->name('about');
Route::get('rating', [RatingController::class, 'index'])
    ->name('rating.index');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');
Route::get('articles/create', [ArticleController::class, 'create'])
    ->name('articles.create');
Route::post('articles', [ArticleController::class, 'store'])
    ->name('articles.store');
Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');
Route::patch('articles/{id}', [ArticleController::class, 'update'])
    ->name('articles.update');
Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');
Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
    ->name('articles.destroy');

Route::get('article_categories', [ArticleCategoryController::class, 'index'])
    ->name('article_categories.index');
Route::get('article_categories/create', [ArticleCategoryController::class, 'create'])
    ->name('article_categories.create');
Route::post('article_categories', [ArticleCategoryController::class, 'store'])
    ->name('article_categories.store');
Route::get('article_categories/{id}', [ArticleCategoryController::class, 'show'])
    ->name('article_categories.show');
Route::patch('article_categories/{id}', [ArticleCategoryController::class, 'update'])
    ->name('article_categories.update');
Route::get('article_categories/{id}/edit', [ArticleCategoryController::class, 'edit'])
    ->name('article_categories.edit');


//Route::get('articles/{articleId}/comments/{id}', function ($articleId, $id) {
//    // ...
//});
