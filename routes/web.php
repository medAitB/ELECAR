<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', [ StaticController::class, 'index'])->name('home.index');
route::get('/about', [ StaticController::class, 'about'])->name('home.about');
route::get('/contact', [ StaticController::class, 'contact'])->name('home.contact');
route::get('/services', [ StaticController::class, 'services'])->name('home.services');

route::resource('/cars', CarsController::class );




Route::get('/store/{categorie?}/{item?}', function ($categorie = NULL, $item = NULL) {
    if(isset($categorie)){
        if(isset($item)){
            return "<h1>{$item}</h1>";

        }
        return "<h1>{$categorie}</h1>";
    }
    return "<h1>store</h1>";
});

Auth::routes();

route::middleware('auth')->group(function(){
    route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

route::middleware(['auth', 'auth.admin'])->group(function(){
    route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/cars', CarsController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('cars', CarsController::class);
});


// routes/web.php


Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'storeForm'])->name('contact.store');



