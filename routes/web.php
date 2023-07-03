<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('posts/create/{name}', [PostController::class, 'create']);

// Route::get('posts/read/{id}', [PostController::class, 'readById']);

// Route::get('posts', [PostController::class, 'readAll']);

// Route::get('posts/update/{id}/{name}', [PostController::class, 'update']);

// Route::get('posts/delete/{id}', [PostController::class, 'delete']);

// Route::get('posts/linktag/{postId}/{tagId}', [PostController::class, 'linkTag']);

// Route::get('videos/create/{name}', [VideoController::class, 'create']);

// Route::get('videos/read/{id}', [VideoController::class, 'readById']);

// Route::get('videos', [VideoController::class, 'readAll']);

// Route::get('videos/update/{id}/{name}', [VideoController::class, 'update']);

// Route::get('videos/delete/{id}', [VideoController::class, 'delete']);

// Route::get('videos/linktag/{videoId}/{tagId}', [VideoController::class, 'linkTag']);

// Route::get('tags/create/{name}', [TagController::class, 'create']);

// Route::get('tags/read/{id}', [TagController::class, 'readById']);

// Route::get('tags', [TagController::class, 'readAll']);

// Route::get('tags/update/{id}/{name}', [VideoController::class, 'update']);

// Route::get('tags/delete/{id}', [TagController::class, 'delete']);

//-------------------------------------------------------------------------

Route::resource('view/posts', PostController::class);