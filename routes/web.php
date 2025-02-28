<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
Use App\Http\Middleware\UserMiddleware;
use App\Models\About;
use App\Models\Admin;

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
Route::get('/contect',[ContactController::class,'contact'])->name('contact');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/room',[HomeController::class,'room'])->name('room');

        //----------contact---------------//
Route::middleware(['auth','user'])->group(function(){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::post('/home/contact',[ContactController::class,'storeContact'])->name('home.contact');
});


        //-----------Admin Pages----------//
Route::middleware(['auth','admin'])->group(function(){
Route::get('/admin/dashboard',[AdminController::class,'admindashboard'])->name('admin.dashboard');
Route::get('/Admin/user/comment',[AdminController::class,'comment'])->name('admin.user.comment');

        //---------About Page-----------//
Route::get('/admin/add/about',[AboutController::class,'addAbout'])->name('admin.add.about');
Route::post('/admin/about/store',[AboutController::class,'storeAbout'])->name('admin.about.store');
        //---------Room Page-----------//
Route::get('/admin/add/room',[RoomController::class,'addRoom'])->name('admin.add.room');
Route::post('/admin/room/store',[RoomController::class,'storeRoom'])->name('admin.room.store');
Route::get('/admin/show/room',[RoomController::class,'showRoom'])->name('admin.show.room');
Route::get('/admin/edit/room/{id}',[RoomController::class,'editRoom'])->name('edit.room');
Route::post('/admin/update/room/{id}',[RoomController::class,'updateRoom'])->name('update.admin.room');
});