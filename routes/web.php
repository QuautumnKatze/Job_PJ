<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\collab\CollabAuthController;
use \App\Http\Controllers\collab\CollabController;
use App\Http\Controllers\collab\CollabJobController;
use App\Http\Controllers\homepage\HomeController;
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
// File Manager
Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
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

        Route::get('/logout', [AuthController::class, 'adminLogout'])->name('logout');

    });
});

//ADMIN Login & Register
Route::get('/admin/register', [AuthController::class, 'showAdminRegisterForm'])->name('register');
Route::post('/admin/check-email', [AuthController::class, 'checkEmail'])->name('check.email');
Route::post('/admin/check-username', [AuthController::class, 'checkUsername'])->name('check.username');
Route::post('/admin/register/submit', [AuthController::class, 'adminRegister'])->name('register.submit');
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('login');
Route::post('/admin/login/submit', [AuthController::class, 'adminLogin'])->name('login.submit');



//--------------------------------------------------------------------------
//COLLAB
Route::prefix('collab')->group(function () {
    Route::middleware('checkCollabLoggedIn')->group(function () {
        Route::middleware('checkCollabStatus')->group(function () {

            // Job
            Route::get('/manage-job', [CollabJobController::class, 'index'])->name('collab.manage-job');
            Route::get('/create-job', [CollabJobController::class, 'create'])->name('collab.create-job');
            Route::post('/store-job', [CollabJobController::class, 'store'])->name('collab.store-job');
            Route::get('/edit-job/{id}', [CollabJobController::class, 'edit'])->name('collab.edit-job');
            Route::delete('/delete-job/{id}', [CollabJobController::class, 'destroy'])->name('collab.destroy-job');
            Route::post('/update-job/{id}', [CollabJobController::class, 'update'])->name('collab.update-job');
            Route::get('/job-application/{id}', [CollabController::class, 'showJobApplications'])->name('collab.job-application');

        });

        Route::get('/home', [CollabController::class, 'index'])->name('collab');
        Route::get('/logout', [AuthController::class, 'collabLogout'])->name('collab.logout');
        Route::get('/expired', [CollabController::class, 'showExpired'])->name('collab.expired');
        Route::get('/unverified', [CollabController::class, 'showUnverified'])->name('collab.unverified');

        //File Manager
        // Route::group(['prefix' => 'file-manager', 'middleware' => ['web', 'check.lfm.auth', 'setLfmConfig']], function () {
        //     \UniSharp\LaravelFilemanager\Lfm::routes();
        // });

    });
});

Route::get('/collab/register', [AuthController::class, 'showCollabRegisterForm'])->name('collab.register');
Route::post('/collab/check-email', [AuthController::class, 'checkEmail'])->name('collab.check.email');
Route::post('/collab/check-username', [AuthController::class, 'checkUsername'])->name('collab.check.username');
Route::post('/collab/check-phone', [AuthController::class, 'checkCollabPhone'])->name('collab.check.phone');
Route::post('/collab/register/submit', [AuthController::class, 'collabRegister'])->name('collab.register.submit');
Route::get('/collab/login', [AuthController::class, 'showCollabLoginForm'])->name('collab.login');
Route::post('/collab/login/submit', [AuthController::class, 'collabLogin'])->name('collab.login.submit');
Route::get('/collab/logout', [AuthController::class, 'collabLogout'])->name('collab.logout');

//--------------------------------------------------------------------------
//HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/home', [HomeController::class, 'index'])->name('homepage.home');
Route::get('/home/job-list', [HomeController::class, 'displayJobs'])->name('homepage.joblist');
Route::get('/home/job-detail/{id}', [HomeController::class, 'displayJobDetail'])->name('homepage.jobdetail');


//-------------------------------------------------------------TEST

