<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
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

/**
 *  to the method get we send two params the uri and array->that has two elements the first is the controller class
 * and the second is the  public method inside the controller class that will execute
 * //important-> uri with param should be in the bottom to avoid conflict
 */
Route::get('/test', [TestController::class,'testAction']);
Route::get('/name', [TestController::class,'tableName']);


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create/', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/page/{page}', [PostController::class, 'paginate'])->name('posts.paginate');
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'] )->name('posts.update');
Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}/restore', [PostController::class, 'restore'])->name('posts.restore');
Route::delete('/posts/{post}/force_delete', [PostController::class, 'force_destroy'])->name('posts.force_destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
