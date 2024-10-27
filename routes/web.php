<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\CheckLoggedIn;


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

Route::get('/', function () {
    return view('homepage.home');
});

Route::get('/home', function () {
    return view('homepage.home');
});



//--------------------------------------------------------------------------
//ADMIN
Route::prefix('admin')->group(function () {
    Route::middleware('checkLoggedIn')->group(function () {
        //Home
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');

        //ADMIN Post Category
        Route::get('/post-categories', [PostCategoryController::class, 'index'])->name('postC.index');
        Route::get('/post-categories/create', [PostCategoryController::class, 'create'])->name('postC.create');
        Route::post('/post-categories/store', [PostCategoryController::class, 'store'])->name('postC.store');
        Route::get('/post-categories/edit/{id}', [PostCategoryController::class, 'edit'])->name('postC.edit');
        Route::delete('/post-categories/delete/{id}', [PostCategoryController::class, 'destroy'])->name('postC.destroy');
        Route::post('/post-categories/update/{id}', [PostCategoryController::class, 'update'])->name('postC.update');

        //ADMIN Post
        Route::get('/post', [PostController::class, 'index'])->name('post.index');
        Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
        Route::post('/post/update/{id}', [PostController::class, 'update'])->name('post.update');

        // File Manager
        Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'auth:admin']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });

    });
});

//ADMIN Login & Register
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/admin/check-email', [AdminAuthController::class, 'checkEmail'])->name('check.email');
Route::post('/admin/check-username', [AdminAuthController::class, 'checkUsername'])->name('check.username');
Route::post('/admin/register/submit', [AdminAuthController::class, 'register'])->name('register.submit');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login/submit', [AdminAuthController::class, 'login'])->name('login.submit');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');




