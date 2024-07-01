<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// frontend file //
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
Route::get('/about-us',[FrontendController::class,'about'])->name('about');
Route::get('/contact-us',[FrontendController::class,'contact'])->name('contact');
Route::post('/contact/post',[FrontendController::class,'contact_post'])->name('contact.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
