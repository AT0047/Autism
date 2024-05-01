<?php

use App\Http\Controllers\dashboard\MyStoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('backend/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::prefix('/dashboard')->group(function () {

        // <--------------------------My Story Start------------------------------------->
        Route::prefix('mystory')->as('mystory.')->group(function () {
            Route::get('/', [MyStoryController::class, 'index'])->name('index');
            Route::get('/create', [MyStoryController::class, 'create'])->name('create');
            Route::post('/store', [MyStoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [MyStoryController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [MyStoryController::class, 'update'])->name('update');
            Route::delete('/destroy/{id}', [MyStoryController::class, 'destroy'])->name('destroy');
        });
    });
});





Route::get('/frontend/home', function () {
    return view('frontend.home_personal');
});

Route::get('/frontend/articles', function () {
    return view('frontend.articles.articles');
});

Route::get('/frontend/articles/blog_details', function () {
    return view('frontend.articles.blog_details');
});

Route::get('/frontend/about_me', function () {
    return view('frontend.about_me.about_me');
});





require __DIR__.'/auth.php';
