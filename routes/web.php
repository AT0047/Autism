<?php

use App\Http\Controllers\dashboard\BookController;
use App\Http\Controllers\dashboard\BookQuestionController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\LibraryController;
use App\Http\Controllers\dashboard\AboutEducationController;
use App\Http\Controllers\dashboard\AboutExperienceController;
use App\Http\Controllers\dashboard\AboutPhotoController;
use App\Http\Controllers\dashboard\AboutSec3Controller;
use App\Http\Controllers\dashboard\AboutUsController;
use App\Http\Controllers\dashboard\MyStoryController;
use App\Http\Controllers\dashboard\OurServiceController;
use App\Http\Controllers\dashboard\PeopleStoryController;
use App\Http\Controllers\dashboard\SocialLinksController;
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
        Route::resource('mystory', MyStoryController::class);
        // <--------------------------My Story End------------------------------------->

        // <--------------------------Social-Links Start------------------------------------->
        Route::resource('social-links', SocialLinksController::class);
        // <--------------------------Social-Links End------------------------------------->

        // <--------------------------People Stories Start------------------------------------->
        Route::resource('people-stories', PeopleStoryController::class);
        // <--------------------------People Stories End------------------------------------->

        // <--------------------------Our Services Start------------------------------------->
        Route::resource('our-services', OurServiceController::class);
        // <--------------------------Our Services End------------------------------------->

        // <--------------------------Libraries Start------------------------------------->
        Route::resource('libraries', LibraryController::class);
        // <--------------------------Libraries End------------------------------------->

        // <--------------------------Categories Start------------------------------------->
        Route::resource('categories', CategoryController::class);
        // <--------------------------Categories End------------------------------------->

        // <--------------------------Books Start------------------------------------->
        Route::prefix('books')->as('books.')->group(function (){
            Route::get('/' , [BookController::class, 'index'])->name('index');
            Route::get('/create' , [BookController::class, 'create'])->name('create');
            Route::post('/store' , [BookController::class, 'store'])->name('store');
            Route::get('/edit/{id}' , [BookController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}' , [BookController::class, 'update'])->name('update');
            Route::delete('/destroy/{id}' , [BookController::class, 'destroy'])->name('destroy');
            Route::prefix('book-questions')->as('book-questions.')->group(function (){
                Route::get('/{book_id}' , [BookQuestionController::class, 'index'])->name('index');
                Route::get('/{book_id}/create' , [BookQuestionController::class, 'create'])->name('create');
                Route::post('/{book_id}/store' , [BookQuestionController::class, 'store'])->name('store');
            });
        });
        // <--------------------------Books End------------------------------------->

        // <--------------------------Book Questions Start------------------------------------->
        Route::prefix('book-questions')->as('book-questions.')->group(function (){
            Route::get('/{book_id}/edit' , [BookQuestionController::class, 'edit'])->name('edit');
            Route::patch('/{book_id}/update' , [BookQuestionController::class, 'update'])->name('update');
            Route::delete('/{book_id}/destroy' , [BookQuestionController::class, 'destroy'])->name('destroy');
        });
        // <--------------------------Book Questions End------------------------------------->
    });
});

//start about us
Route::resource('about-us', AboutUsController::class);
Route::resource('about-education', AboutEducationController::class);
Route::resource('about-experience', AboutExperienceController::class);
Route::resource('about-sec3', AboutSec3Controller::class);
Route::resource('about-photos', AboutPhotoController::class);



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
