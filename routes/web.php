<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'home'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about',[AdminController::class,'about'])->name('about');
Route::get('/blog',[AdminController::class,'blog'])->name('blog');
Route::get('/contect',[AdminController::class,'contect'])->name('contact');
Route::get('/gallery',[AdminController::class,'gallery'])->name('gallery');
Route::get('/room',[AdminController::class,'room'])->name('room');