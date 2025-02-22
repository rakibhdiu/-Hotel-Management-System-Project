<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/',[HomeController::class,'home'])->name('home');
       

        //-----------Home Pages--------------//
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contect',[HomeController::class,'contact'])->name('contact');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/room',[HomeController::class,'room'])->name('room');



        //-----------Admin Pages----------//

Route::get('/admin/dashboard',[AdminController::class,'admindashboard'])->name('admin.dashboard');