<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\collab\CollabAuthController;
use \App\Http\Controllers\collab\CollabController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\RecruiterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\checkAdminLoggedIn;


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
    Route::middleware('checkAdminLoggedIn')->group(function () {
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

        // ADMIN Job Category
        Route::get('/job-categories', [JobCategoryController::class, 'index'])->name('jobC.index');
        Route::get('/job-categories/create', [JobCategoryController::class, 'create'])->name('jobC.create');
        Route::post('/job-categories/store', [JobCategoryController::class, 'store'])->name('jobC.store');
        Route::get('/job-categories/edit/{id}', [JobCategoryController::class, 'edit'])->name('jobC.edit');
        Route::delete('/job-categories/delete/{id}', [JobCategoryController::class, 'destroy'])->name('jobC.destroy');
        Route::post('/job-categories/update/{id}', [JobCategoryController::class, 'update'])->name('jobC.update');

        // ADMIN Recruiter
        Route::get('/recruiter', [RecruiterController::class, 'index'])->name('recruiter.index');
        Route::get('/recruiter-pending', [RecruiterController::class, 'showPending'])->name('recruiter.pending');
        Route::get('/recruiter-canceled', [RecruiterController::class, 'showCanceled'])->name('recruiter.canceled');
        Route::get('/recruiter-banlist', [RecruiterController::class, 'showBan'])->name('recruiter.ban');
        Route::post('/recruiter-verify/{id}', [RecruiterController::class, 'verify'])->name('recruiter.verify');
        Route::post('/recruiter-upgrade/{id}', [RecruiterController::class, 'upgrade'])->name('recruiter.upgrade');


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


//--------------------------------------------------------------------------
//COLLAB
Route::prefix('collab')->group(function () {
    Route::middleware('checkCollabLoggedIn')->group(function () {
        Route::middleware('checkCollabStatus')->group(function () {
            Route::get('/home', [CollabController::class, 'index'])->name('collab');
            Route::get('/create-job', [CollabController::class, 'createJob'])->name('collab.create-job');
        });

        Route::get('/expired', [CollabController::class, 'showExpired'])->name('collab.expired');
        Route::get('/unverified', [CollabController::class, 'showUnverified'])->name('collab.unverified');

        // File Manager
        Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'auth:collab']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });

    });
});

Route::get('/collab/register', [CollabAuthController::class, 'showRegisterForm'])->name('collab.register');
Route::post('/collab/check-email', [CollabAuthController::class, 'checkEmail'])->name('collab.check.email');
Route::post('/collab/check-phone', [CollabAuthController::class, 'checkphone'])->name('collab.check.phone');
Route::post('/collab/register/submit', [CollabAuthController::class, 'register'])->name('collab.register.submit');
Route::get('/collab/login', [CollabAuthController::class, 'showLoginForm'])->name('collab.login');
Route::post('/collab/login/submit', [CollabAuthController::class, 'login'])->name('collab.login.submit');
Route::get('/collab/logout', [CollabAuthController::class, 'logout'])->name('collab.logout');

//--------------------------------------------------------------------------
//
//-------------------------------------------------------------TEST
Route::get('/collab/test-mail', [CollabAuthController::class, 'testMail'])->name('collab.testmail');
