<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\userController;

use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

/*        '/example' - urlpath           [controller::class, 'function'] - controller samt funktionens namn */

Route::get('/', [indexController::class, 'index']);

Route::get('/login', [userController::class, 'loginPage']);

Route::get('/register', [userController::class, 'registerPage']);

Route::get('/newPost', [postsController::class, 'newPostPage']);

Route::get('/posts/{id}', [postsController::class, 'singlePost']);
