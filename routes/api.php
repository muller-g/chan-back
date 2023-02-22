<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('public')->group(function () {
    Route::get('/categories', [CategoriesController::class, 'index'])->name('category.get');
    Route::get('/likes', [PostsController::class, 'mostViews'])->name('post.mostViews');
    Route::get('/slug/{category}', [CategoriesController::class, 'slug'])->name('category.slug');
    Route::post('/post-create', [PostsController::class, 'store'])->name('post.store');
    Route::post('/post-vote', [PostsController::class, 'vote'])->name('post.vote');
    Route::post('/post-reply', [PostsController::class, 'reply'])->name('post.reply');
});
