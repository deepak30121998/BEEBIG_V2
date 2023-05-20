<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AboutController,
    BlogsController,
    ContactController,
    PagesController,
    NewsletterSubscriptionController
};

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.us');
Route::get('/blogs', [BlogsController::class, 'index'])->name('front.blogs.show');
Route::get('/contact-us', [ContactController::class, 'index'])->name('front.contact');
Route::get('/blogs/{slug}', [BlogsController::class, 'show'])->name('front.blogs.detail');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/page/{slug}', [PagesController::class, 'detail']);

// Route For Newsletter
Route::post('/add-subscriber-email', [NewsletterSubscriptionController::class, 'addSubscriber']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','role:super-admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');

});
